<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=us-ascii">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/Logo KCT -No BG-01.png">
    <title>KCT-Admin</title>
    <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard">
    <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 5 dashboard, bootstrap 5, css3 dashboard, bootstrap 5 admin, Material Dashboard bootstrap 5 dashboard, frontend, responsive bootstrap 5 dashboard, free dashboard, free admin dashboard, free bootstrap 5 admin dashboard">
    <meta name="description" content="Material Dashboard 2 is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful and organized. If you are looking for a tool to manage and visualize data about your business, this dashboard is the thing for you.">
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="DNL-Admin">
    <meta name="twitter:description" content="Material Dashboard 2 is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful and organized. If you are looking for a tool to manage and visualize data about your business, this dashboard is the thing for you.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="./../../s3.amazonaws.com/creativetim_bucket/products/450/original/material-dashboard.jpg">
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="DNL-Admin">
    <meta property="og:type" content="article">
    <meta property="og:url" content="index.html">
    <meta property="og:image" content="./../../s3.amazonaws.com/creativetim_bucket/products/450/original/material-dashboard.jpg">
    <meta property="og:description" content="Material Dashboard 2 is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful and organized. If you are looking for a tool to manage and visualize data about your business, this dashboard is the thing for you.">
    <meta property="og:site_name" content="Creative Tim">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700">
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet">
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet">
    <script src="./../../kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link id="pagestyle" href="../assets/css/material-dashboard.mine63c.css?v=3.1.0" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../Css/createPost.css">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Get the canvas element
        var ctx = document.getElementById('projectsDoughnutChart').getContext('2d');

        // Define data for the Doughnut chart
        var data = {
            labels: ['Completed', 'Remaining'],
            datasets: [{
                data: [30, 70], // Adjust these values according to your data
                backgroundColor: ['#36a2eb', '#d3d3d3'], // You can customize the colors
            }]
        };

        // Configure options for the Doughnut chart
        var options = {
            cutoutPercentage: 80, // Adjust the cutout percentage as needed
            responsive: true,
            maintainAspectRatio: false,
        };

        // Create the Doughnut chart
        var myDoughnutChart = new Chart(ctx, {
            type: 'doughnut',
            data: data,
            options: options
        });
    </script>
    <style>
        .async-hide {
            opacity: 0 !important
        }

        .active {
            background-color: #6f42c1 !important;
            /* Solid purple color */
            /* For a gradient, use this instead: */
            /* background: linear-gradient(to right, #a855f7, #7e22ce) !important; */
        }

        .async-hide {
            opacity: 0 !important
        }

        /* Link Style */
        a.blog-post {
            text-decoration: none;
            /* Remove underline */
            padding: 5px 10px;
            /* Add padding for better clickability */
            background-color: #007bff;
            /* Blue color for the link */
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s;
            /* Smooth transition for hover effect */
        }

        /* Link Hover Effect */
        a.blog-post:hover {
            background-color: #0056b3;
            /* Darker blue on hover */
        }

        .Container {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
        }

        .form-container {
            flex: 1;

        }

        .table-post {
            flex: 1;
            overflow: auto;
            /* Add scrollbars if content overflows */
        }

        /* Style for form elements */
        label {
            margin-bottom: 5px;
            display: block;
        }

        input[type="text"],
        input[type="date"],
        input[type="file"],
        input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #00570E;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #004A0A;
        }

        /* Quill editor container */
        #quill-editor {
            height: 200px;
            /* Set desired height */
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 10px;
        }
        .action-buttons {
            display: flex;
            gap: 10px;
            /* Adjust the gap as needed */
        }

        .action-buttons a {
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 4px;
            color: white;
            text-align: center;
        }

        .action-buttons .edit {
            background-color: #4CAF50;
            /* Green */
        }

        .action-buttons .delete {
            background-color: #f44336;
            /* Red */
        }

        .search-form-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 20px 0;
        }

        .search-form-container form {
            display: flex;
            align-items: center;
        }

        .search-form-container input[type="text"] {
            padding: 10px;

            border: 1px solid #ccc;
            border-radius: 4px 0 0 4px;
            outline: none;
            width: 300px;
        }

        .search-form-container button {
            padding: 10px 20px;

            border: 1px solid #ccc;
            border-left: none;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            border-radius: 0 4px 4px 0;
            outline: none;
        }

        .search-form-container button:hover {
            background-color: #0056b3;
        }

        /* Styles for the "Add New Post" button */
        .add-post-button {
            padding: 10px 20px;
            
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            outline: none;
            
        }

        .add-post-button:hover {
            background-color: #218838;
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
           
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            /* padding-top: 60px; */
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 800px;
            height: 900px;
            border-radius: 10px;
            position: relative;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
        }

        .modal iframe {
            width: 100%;
            height: 750px;
            border: none;
        }
        .table-container {
            max-height: 550px;
            overflow-y: auto;
            margin: 20px 0;
            border: 1px solid #ddd;
        }

        .posts-table {
            width: 100%;
            border-collapse: collapse;
        }

        .posts-table thead th {
            position: sticky;
            top: 0;
            
            z-index: 1;
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .posts-table tbody td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
    </style>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', './../../www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-46172202-22', 'auto', {
            allowLinker: true
        });
        ga('set', 'anonymizeIp', true);
        ga('require', 'GTM-K9BGS8K');
        ga('require', 'displayfeatures');
        ga('require', 'linker');
        ga('linker:autoLink', ["2checkout.com", "avangate.com"]);
    </script>
    <script defer data-site="demos.creative-tim.com" src="./../../api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show bg-gray-200">
    <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header" style="margin-left:50px; margin-top:20px;">
            <a class="navbar-brand m-0" href="home.php" target="_blank"><img src="../assets/Logo KCT -No BG-01.png" alt="main_logo" style="width:35%; "></a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white " href="../home.php" >
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div><span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../Service/upload_service.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div><span class="nav-link-text ms-1">Service</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white active" href="createPost.php" style="background-color: #6f42c1 !important;">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div><span class="nav-link-text ms-1">Blog Post</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../table.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">view_in_ar</i>
                        </div><span class="nav-link-text ms-1">Quotations</span>
                    </a>
                </li>
             
                <li class="nav-item">
                    <a class="nav-link text-white" href="../Project/upload_project.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
                        </div><span class="nav-link-text ms-1">Project</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../Feature/function.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">notifications</i>
                        </div><span class="nav-link-text ms-1">Feature</span>
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="profile.html">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">person</i>
                        </div><span class="nav-link-text ms-1">Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">login</i>
                        </div><span class="nav-link-text ms-1">Sign In</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="sign-up.html">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">assignment</i>
                        </div><span class="nav-link-text ms-1">Sign Up</span>
                    </a>
                </li>
            </ul>
        </div>

    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg" style=" margin-left:250px; margin-top:20px">
        <div class="container-fluid py-4" style="display:flex;">
            <div class="Container">
                <div class="form-container" style="margin-top:20px;">
                    <form action="../process_post.php" method="post" enctype="multipart/form-data">
                        <!-- Title -->
                        <label for="title">Title:</label>
                        <input type="text" id="title" name="title" required><br>

                        <!-- Content (Quill Editor) -->
                        <label for="content">Content:</label><br>
                        <div id="quill-editor"></div>
                        <input type="hidden" id="content" name="content"><br>

                        <label for="date">Date:</label>
                        <input type="date" id="date" name="date" required><br>

                        <!-- Posted By -->
                        <label for="posted_by">Posted By:</label>
                        <input type="text" id="posted_by" name="posted_by" required><br>

                        <!-- Tag -->
                        <label for="tag">Tag:</label>
                        <input type="text" id="tag" name="tag"><br>

                        <!-- File Upload for Images -->
                        <label for="file">Image Upload:</label>
                        <input type="file" id="file" name="file" accept="image/*"><br>

                        <br>

                        <!-- Submit Button -->
                        <input type="submit" value="Submit">
                    </form>
                </div>

            </div>



            <script>
                var quill = new Quill('#quill-editor', {
                    theme: 'snow',
                    placeholder: 'Write your content here...',
                });

                document.querySelector('form').onsubmit = function() {
                    var contentInput = document.querySelector('#content');
                    contentInput.value = quill.root.innerHTML;
                };
            </script>
           
           
                <!-- Search Form -->
                <!-- <div class="search-form-container">
                   
                    <form method="GET" action="">
                        <input type="text" name="search" placeholder="Search posts" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
                        <button type="submit">Search</button>
                    </form>
                </div> -->
                <div class="table-container" style="background-color: #fefefe; margin-left:10px;">
                    <table class="posts-table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Date</th>
                                <th>Posted By</th>
                                <th>Tag</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include './config/db_conn.php';

                            // Capture the search term
                            $search = isset($_GET['search']) ? $_GET['search'] : '';

                            // Modify the SQL query to include the search condition
                            $sql = "SELECT id, title, content, date, posted_by, tag, image FROM posts";
                            if ($search) {
                                $sql .= " WHERE title LIKE '%" . $conn->real_escape_string($search) . "%' 
                    OR content LIKE '%" . $conn->real_escape_string($search) . "%'
                    OR posted_by LIKE '%" . $conn->real_escape_string($search) . "%'
                    OR tag LIKE '%" . $conn->real_escape_string($search) . "%'";
                            }

                            $result = $conn->query($sql);
                            // Check if there are rows in the result
                            if ($result->num_rows > 0) {
                                // Output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    // Display only the first 20 characters of the title
                                    $title = substr($row["title"], 0, 20);
                                    echo "<td>" . (strlen($row["title"]) > 20 ? $title . "..." : $title) . "</td>";
                                    // Display only the first 120 characters of the content
                                    $content = substr($row["content"], 0, 120);
                                    echo "<td>" . (strlen($row["content"]) > 120 ? $content . "..." : $content) . "</td>";
                                    echo "<td>" . $row["date"] . "</td>";
                                    echo "<td>" . $row["posted_by"] . "</td>";
                                    echo "<td>" . $row["tag"] . "</td>";
                                    echo "<td><img src='." . $row["image"] . "' alt='Image' style='max-width: 50px; max-height: 50px;'></td>";
                                    echo "<td class='action-buttons'>
                        <a class='edit' href='updateBlogPost.php?id=" . $row["id"] . "'>Edit</a>
                        <a class='delete' href='delete.php?id=" . $row["id"] . "' onclick='return confirm(\"Are you sure?\");'>Delete</a>
                      </td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='7'>No posts found.</td></tr>";
                            }

                            // Close the database connection
                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="createPostModal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeCreatePostModal()">&times;</span>
                    <h2>Create New Post</h2>
                    <iframe src="createPost.php" frameborder="0" id="createPostIframe"></iframe>
                </div>
            </div>

            <script>
                function openCreatePostModal() {
                    document.getElementById("createPostModal").style.display = "block";
                }

                function closeCreatePostModal() {
                    document.getElementById("createPostModal").style.display = "none";
                }

                window.onclick = function(event) {
                    var modal = document.getElementById("createPostModal");
                    if (event.target === modal) {
                        modal.style.display = "none";
                    }
                }
            </script>
           </div>
              
        </div>
    </main>

    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/core/bootstrap.min.js"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>

</body>

</html>