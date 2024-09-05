<?php
$listings = [
  [
    'id' => 1,
    'title' => 'Software Engineer',
    'description' => 'We are seeking a skilled software engineer to develop high-quality software solutions.',
    'salary' => 80000,
    'location' => 'San Francisco',
    'tags' => ['Software Development', 'Java', 'Python', 'SEO']
  ],
  [
    'id' => 2,
    'title' => 'Marketing Specialist',
    'description' => 'We are looking for a marketing specialist to develop and implement effective marketing strategies.',
    'salary' => 60000,
    'location' => 'New York',
    'tags' => ['Digital Marketing', 'Social Media', 'SEO']
  ],
  [
    'id' => 3,
    'title' => 'Accountant',
    'description' => 'We are hiring an experienced accountant to handle financial transactions and ensure compliance.',
    'salary' => 55000,
    'location' => 'Chicago',
    'tags' => ['Accounting', 'Bookkeeping', 'Financial Reporting']
  ],
  [
    'id' => 4,
    'title' => 'UX Designer',
    'description' => 'We are seeking a talented UX designer to create intuitive and visually appealing user interfaces.',
    'salary' => 70000,
    'location' => 'Seattle',
    'tags' => ['User Experience', 'Wireframing', 'Prototyping', 'Web Development']
  ],
  [
    'id' => 5,
    'title' => 'Customer Service Representative',
    'description' => 'We are looking for a friendly customer service representative to assist customers and resolve issues.',
    'salary' => 40000,
    'location' => 'New York',
    'tags' => []
  ],
];

// This function makes the salary look nice, like "$80,000".
function formatSalary($salary)
{
  // We add a dollar sign to the beginning of the salary.
  // Then we use a special function called number_format to add commas to the salary.
  return '$' . number_format($salary);
}

// This function highlights certain words in the tags, like "SEO".
function highlightTags($tags, $searchTerm)
{
  // We take the list of tags and turn it into a string, like "Software Development, Java, Python, SEO".
  $tagsArray = implode(', ', $tags);
  // Then we replace the word we're looking for with a highlighted version.
  // It's like using a yellow marker to highlight the word!
  return str_replace($searchTerm, "<span class='bg-yellow-200'>$searchTerm</span>", $tagsArray);
}
?>


<!-- This is the start of the HTML document -->
<!DOCTYPE html>
<html lang="en">

<!-- This is the head section, where we put important information about the page -->
<head>
  <!-- This tells the browser what kind of characters to use -->
  <meta charset="UTF-8">
  <!-- This helps the page look good on different devices -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- We're including a CSS library called Tailwind CSS to make the page look nice -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- This is the title of the page, which shows up in the browser tab -->
  <title>Job Listings</title>
</head>

<!-- This is the body section, where we put the content of the page -->
<body class="bg-gray-100">
  <!-- This is the header section, with a blue background and white text -->
  <header class="bg-blue-500 text-white p-4">
    <!-- A container to center the content -->
    <div class="container mx-auto">
      <!-- The title of the page, like "Job Listings" -->
      <h1 class="text-3xl font-semibold">Job Listings</h1>
    </div>
  </header>
  <!-- A container to hold the job listings -->
  <div class="container mx-auto p-4 mt-4">
    <!-- A green box to hold the average salary -->
    <div class="bg-green-100 rounded-lg shadow-md p-6 my-6">
      <!-- The title of the box, like "Average Salary:" -->
      <h2 class="text-2xl font-semibold mb-4">Average Salary:</h2>
    </div>
    <!-- We're looping through each job listing... -->
    <?php foreach ($listings as $index => $job) : ?>
      <!-- A container to hold the job listing -->
      <div class="md my-4">
        <!-- A box to hold the job listing, with a blue or white background -->
        <div class="rounded-lg shadow-md <?= $index % 2 === 0 ? 'bg-blue-100' : 'bg-white' ?>">
          <!-- A container to hold the job listing content -->
          <div class="p-4">
            <!-- The title of the job, like "Software Engineer" -->
            <h2 class="text-xl font-semibold"><?= $job['title'] ?></h2>
            <!-- The description of the job -->
            <p class="text-gray-700 text-lg mt-2"><?= $job['description'] ?></p>
            <!-- A list to hold the job details -->
            <ul class="mt-4">
              <!-- The salary of the job, formatted to look nice -->
              <li class="mb-2">
                <strong>Salary:</strong> <?= formatSalary($job['salary']); ?>
              </li>
              <!-- The location of the job -->
              <li class="mb-2">
                <strong>Location:</strong> <?= $job['location'] ?>
                <!-- A tag to indicate if the job is local or remote -->
                <span class="text-xs text-white <?= $job['location'] === 'New York' ? 'bg-blue-500' : 'bg-green-500'; ?> rounded-full px-2 py-1 ml-2"><?= $job['location'] === 'New York' ? 'Local' : 'Remote'; ?></span>
              </li>
              <!-- If the job has tags, we'll display them -->
              <?php if (!empty($job['tags'])) : ?>
                <li class="mb-2">
                  <strong>Tags:</strong> <?= highlightTags($job['tags'], 'SEO') ?>
                </li>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</body>

</html>