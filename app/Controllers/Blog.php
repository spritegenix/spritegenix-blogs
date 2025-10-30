<?php

namespace App\Controllers;

use App\Models\PostsModel;
use App\Models\PostCategoryModel;
use App\Models\TagModel as AdminTagModel;
use App\Models\PostTagModel as AdminPostTagModel;


class Blog extends BaseController
{
    public function index()
    {
        $PostsModel = new PostsModel();
        $PostCategoryModel = new PostCategoryModel();
        $TagModel = new AdminTagModel(); // Use the admin panel's TagModel

        $perPage = 6; // Number of posts per page
        $currentPage = $this->request->getVar('page') ? (int)$this->request->getVar('page') : 1;
        $offset = ($currentPage - 1) * $perPage;

        $builder = $PostsModel->builder();
        $builder->where('status', 'published')->where('company_id', COMPANY_ID)->where('post_name', 'blog')->orderBy('datetime', 'DESC');
        $sql = $builder->getCompiledSelect();
       

        $totalPosts = $PostsModel->where('status', 'published')->where('company_id', COMPANY_ID)->where('post_name', 'blog')->countAllResults();
        $totalPages = ceil($totalPosts / $perPage);

        $posts = $PostsModel->where('status', 'published')->where('company_id', COMPANY_ID)->where('post_name', 'blog')->orderBy('datetime', 'DESC')->limit($perPage, $offset)->findAll();
     

        $data = [
            'title' => 'Blog - SpriteGenix',
            'posts' => $posts,
         
            'currentPage' => $currentPage,
            'totalPages' => $totalPages,
            'perPage' => $perPage,
        ];
        echo view('layout/header', $data);
        echo view('blog', $data);
        echo view('layout/footer', $data);
    }

    public function details($slug = null)
    {
        $PostsModel = new PostsModel();
        $PostCategoryModel = new PostCategoryModel();
        $TagModel = new AdminTagModel(); // Use the admin panel's TagModel
        $PostTagsModel = new AdminPostTagModel(); // Use the admin panel's PostTagModel

        $post = $PostsModel->where('slug', $slug)->where('status', 'published')->where('company_id', COMPANY_ID)->where('post_name', 'blog')->first();

        if (!$post) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Fetch category name and slug for the specific post and attach to $post
        $category = $PostCategoryModel->where('id', $post['category'])->first();
        if ($category) {
            $post['cat_name'] = $category['category_name'];
            $post['category_slug'] = $category['slug'];
        } else {
            $post['cat_name'] = 'Uncategorized';
            $post['category_slug'] = 'uncategorized';
        }

        // Fetch tags associated with the current post using the pivot table
        $post['post_tags'] = [];
        $postTagIds = $PostTagsModel->select('tag_id')->where('post_id', $post['id'])->findAll();
        if (!empty($postTagIds)) {
            $tagIds = array_column($postTagIds, 'tag_id');
            $post['post_tags'] = $TagModel->whereIn('id', $tagIds)->findAll();
        }

        // Fetch latest 5 posts for the sidebar
        $latestPosts = $PostsModel->where('status', 'published')
                                  ->where('company_id', COMPANY_ID)
                                  ->where('post_name', 'blog')
                                  ->orderBy('datetime', 'DESC')
                                  ->limit(5)
                                  ->findAll();

        // Fetch categories that have blog posts
        $categories = $PostCategoryModel
            ->select('post_categories.*')
            ->join('posts', 'post_categories.id = posts.category')
            ->where('posts.status', 'published')
            ->where('posts.company_id', COMPANY_ID)
            ->where('posts.post_name', 'blog')
            ->distinct()
            ->orderBy('post_categories.category_name', 'ASC')
            ->findAll();

        $data = [
            'title' => $post['title'] . ' - SpriteGenix Blog',
            'post' => $post, // Consolidated post object with category and tags
            'meta_description'=> $post['short_description'],
            'meta_keywords' => $post['meta_keyword'],
            'og_image' => base_url("admin_panel/public/images/posts/" . $post['featured']),
            'latestPosts' => $latestPosts,
            'categories' => $categories,
        ];
         echo view('layout/header', $data);
        echo view('blog-single', $data); // Changed to blog-single
        echo view('layout/footer', $data);
    }

    public function getAllPosts()
    {
        $PostModel = new PostsModel();

        try {
            $posts = $PostModel->orderBy('datetime', 'DESC')->findAll();
            return $this->response->setJSON([
                'status' => 'success',
                'data' => $posts
            ]);
        } catch (\Exception $e) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => $e->getMessage()
            ]);
        }
    }

    public function postsByTag($tagSlug = null)
    {
        $PostsModel = new PostsModel();
        $PostCategoryModel = new PostCategoryModel();
        $TagModel = new AdminTagModel(); // Use the admin panel's TagModel
        $PostTagsModel = new AdminPostTagModel(); // Use the admin panel's PostTagModel

        $perPage = 9; // Number of posts per page (consistent with index method)
        $currentPage = $this->request->getVar('page') ? (int)$this->request->getVar('page') : 1;
        $offset = ($currentPage - 1) * $perPage;

        $tag = $TagModel->where('slug', $tagSlug)->first();

        if (!$tag) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $postIdsByTag = $PostTagsModel->select('post_id')->where('tag_id', $tag['id'])->findAll();
        $postIds = array_column($postIdsByTag, 'post_id');

        $totalPosts = $PostsModel->whereIn('id', $postIds)
                                 ->where('status', 'published')
                                 ->where('company_id', COMPANY_ID)
                                 ->where('post_name', 'blog')
                                 ->countAllResults();
        $totalPages = ceil($totalPosts / $perPage);

        $posts = $PostsModel->whereIn('id', $postIds)
                            ->where('status', 'published')
                            ->where('company_id', COMPANY_ID)
                            ->where('post_name', 'blog')
                            ->orderBy('datetime', 'DESC')
                            ->limit($perPage, $offset)
                            ->findAll();

        $data = [
            'title' =>  $tag['name'] . ' - SpriteGenix',
            'posts' => $posts,
            'currentPage' => $currentPage,
            'totalPages' => $totalPages,
            'perPage' => $perPage,
            'current_tag' => $tag,
        ];
        echo view('layout/header', $data);
        echo view('blog', $data);
        echo view('layout/footer', $data);
    }

    public function postsByCategory($categorySlug = null)
    {
        $PostsModel = new PostsModel();
        $PostCategoryModel = new PostCategoryModel();
        $TagModel = new AdminTagModel(); // Use the admin panel's TagModel

        $perPage = 9; // Number of posts per page (consistent with index method)
        $currentPage = $this->request->getVar('page') ? (int)$this->request->getVar('page') : 1;
        $offset = ($currentPage - 1) * $perPage;

        $category = $PostCategoryModel->where('slug', $categorySlug)->first();

        if (!$category) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $totalPosts = $PostsModel->where('category', $category['id'])
                                 ->where('status', 'published')
                                 ->where('company_id', COMPANY_ID)
                                 ->where('post_name', 'blog')
                                 ->countAllResults();
        $totalPages = ceil($totalPosts / $perPage);

        $posts = $PostsModel->where('category', $category['id'])
                            ->where('status', 'published')
                            ->where('company_id', COMPANY_ID)
                            ->where('post_name', 'blog')
                            ->orderBy('datetime', 'DESC')
                            ->limit($perPage, $offset)
                            ->findAll();

        $data = [
            'title' => $category['category_name'] . ' - SpriteGenix',
            'posts' => $posts,
            'currentPage' => $currentPage,
            'totalPages' => $totalPages,
            'perPage' => $perPage,
            'current_category' => $category,
        ];
        echo view('layout/header', $data);
        echo view('blog', $data);
        echo view('layout/footer', $data);
    }
}
