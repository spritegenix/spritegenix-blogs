public function run(): void
{
// disable foreign key check ...
$this->db->disableForeignKeyChecks();

// Table Data ...
$reviews = [
[
'company_id' => 1,
'profile_pic' => 'profile1.jpg',
'user_name' => 'Alice Johnson',
'designation' => 'Marketing Manager',
'ratings' => 5,
'review' => 'Excellent service and support!',
'created_at' => date('Y-m-d H:i:s'),
'updated_at' => date('Y-m-d H:i:s'),
],
[
'company_id' => 2,
'profile_pic' => null,
'user_name' => 'Bob Smith',
'designation' => 'Software Engineer',
'ratings' => 4,
'review' => 'Very good experience overall.',
'created_at' => date('Y-m-d H:i:s'),
'updated_at' => date('Y-m-d H:i:s'),
],
[
'company_id' => 1,
'profile_pic' => 'profile3.png',
'user_name' => 'Carol Davis',
'designation' => null,
'ratings' => 3,
'review' => 'Decent service but can improve.',
'created_at' => date('Y-m-d H:i:s'),
'updated_at' => date('Y-m-d H:i:s'),
],
];

// Clean up the table before seeding ...
$this->db->table('reviews')->truncate();

// Using Query Builder Class ...
try {
$this->db->table('reviews')->insertBatch($reviews);
} catch (ReflectionException $e) {
throw new ReflectionException($e->getMessage());
}

// enable foreign key check ...
$this->db->enableForeignKeyChecks();
}