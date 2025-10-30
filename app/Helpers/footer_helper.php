<?php

function footer_our_services() {
  $footerOurServices = [
    'ourServices' => [
      [
        'id' => 1,
        'title' => 'GRAPHIC & DESIGNING',
        'link' => 'https://www.spritegenix.com/graphic-designing',
        'services' => [
          " Logo and brand identity",
          "Print design",
          "Packaging and covers",
          "Marketing design",
        ],
      ],
      [
        'id' => 2,
        'title' => 'DIGITAL MARKETING',
        'link' => 'https://www.spritegenix.com/digital-marketing',
        'services' => [
          "Search Engine Optimization (SEO)",
          "Search Engine Marketing (SEM)",
          "Social Media Marketing",
          "Email / WhatsApp / SMS Marketing",
        ],
      ],
      [
        'id' => 3,
        'title' => 'PROGRAMMING & TECH',
        'link' => 'https://www.spritegenix.com/programming-tech',
        'services' => [
          "Web development",
          "Application development",
          "Software development",
          "Cybersecurity support",
        ],
      ],
      [
        'id' => 4,
        'title' => 'VIDEO & ANIMATION',
        'link' => 'https://www.spritegenix.com/video-animation',
        'services' => [
          "Editing and post-production",
          "Animation",
          "Motion graphics",
          "Social and marketing",
        ],
      ],
      [
        'id' => 5,
        'title' => 'WRITING & TRANSLATION',
        'link' => 'https://www.spritegenix.com/writing-translation',
        'services' => [
          "Content writing",
          "Editing and critique",
          "Business and marketing copy",
          "Creative writing",
        ],
      ],
      [
        'id' => 6,
        'title' => 'BUSINESS SOLUTION',
        'link' => 'https://www.spritegenix.com/business-solution',
        'services' => [
          "Business solution and growth",
          "Accounting & finance",
          "Legal services",
          "Sales and customer care",
        ],
      ],
    ],
  ];

  $output = '<div class="footerOurServices">';
  $output .= '<div class="services">';
  foreach ($footerOurServices['ourServices'] as $item) {
    $output .= '<ul>';
    $output .= '<p><a Class="footerOurServicestitle" href="' . $item['link'] . '"><strong>' . $item['title'] . '</strong></a></p>';
    foreach ($item['services'] as $service) {
      $output .= '<li>' . $service . '</li>';
    }
    $output .= '</ul>';
  }
  $output .= '</div>';
  $output .= '</div>';
  return $output;
}

?>
