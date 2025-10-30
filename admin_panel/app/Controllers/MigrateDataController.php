<?php

namespace App\Controllers;

use App\Models\PostsModel;
use App\Models\TagModel;
use App\Models\PostTagModel;

class MigrateDataController extends BaseController
{
    public function index()
    {
        $db = db_connect();
        $db->disableForeignKeyChecks();

        $postModel = new PostsModel();
        $tagModel = new TagModel();
        $postTagModel = new PostTagModel();

        $posts = $postModel->findAll();

        foreach ($posts as $post) {
            if (!empty($post['meta_keyword'])) {
                $tags = explode(',', $post['meta_keyword']);
                foreach ($tags as $tagName) {
                    $tagName = trim(strtolower($tagName)); // Convert to lowercase
                    if (!empty($tagName)) {
                        $tag = $tagModel->where('name', $tagName)->first();
                        if (!$tag) {
                            $slug = url_title($tagName, '-', true);
                            $tagId = $tagModel->insert([
                                'name' => $tagName,
                                'slug' => $slug,
                            ]);
                            $tag = ['id' => $tagId];
                        }
                        $postTagModel->insert([
                            'post_id' => $post['id'],
                            'tag_id'  => $tag['id'],
                        ]);
                    }
                }
            }
        }

        $db->enableForeignKeyChecks();

        return 'Data migration complete.';
    }
}
