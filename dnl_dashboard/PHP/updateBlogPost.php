<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=us-ascii">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700">
    <script src="./../../kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link id="pagestyle" href="../assets/css/material-dashboard.mine63c.css?v=3.1.0" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../Css/editPost.css">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <title>Edit Post</title>
    <style>
        .async-hide {
            opacity: 0 !important
        }
        .create-button {
            margin-top: 20px;
            /* Adjust the top margin as needed */
        }

        .create-button a {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .create-button a:hover {
            background-color: #218838;
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
        })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-46172202-22', 'auto', {
            allowLinker: true
        });
        ga('set', 'anonymizeIp', true);
        ga('require', 'GTM-K9BGS8K');
        ga('require', 'displayfeatures');
        ga('require', 'linker');
        ga('linker:autoLink', ["2checkout.com", "avangate.com"]);
    </script>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
    </script>
    <script defer data-site="demos.creative-tim.com" src="../../../api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show bg-gray-200">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i> <a class="navbar-brand m-0" href="index.html" target="_blank"><img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo"> <span class="ms-1 font-weight-bold text-white">Material Dashboard 2</span></a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white " href="../home.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div><span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="#">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div><span class="nav-link-text ms-1">Service</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white bg-gradient-primary" href="../PHP/createPost.php">
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
                    <a class="nav-link text-white" href="sign-in.html">
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
        <div class="sidenav-footer position-absolute w-100 bottom-0">
            <div class="mx-3">
                <a class="btn btn-outline-primary mt-4 w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard?ref=sidebarfree" type="button">Documentation</a> <a class="btn bg-gradient-primary w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
            </div>
        </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
            <div class="container-fluid py-1 px-3">
               
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group input-group-outline">
                            <label class="form-label">Type here...</label> <input type="text" class="form-control">
                        </div>
                    </div>
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner"></div>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0"></a>
                        </li>

                        <li class="nav-item d-flex align-items-center">
                            <a href="sign-in.html" class="nav-link text-body font-weight-bold px-0"><span class="d-sm-inline d-none">Sign In</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <?php
        include './config/db_conn.php';

        // Check if the post ID is provided in the URL
        if (isset($_GET['id'])) {
            $post_id = $_GET['id'];

            // Query to retrieve the specific post from the database
            $sql = "SELECT id, title, content, date, posted_by, tag, image FROM posts WHERE id = $post_id";
            $result = $conn->query($sql);

            // Check if there are rows in the result
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();  // Fetch the row

                // Your HTML form goes here
        ?>
               
                <form action="../process_update.php" method="post" enctype="multipart/form-data">
                    <!-- Post ID (hidden) -->
                    <input type="hidden" id="post_id" name="post_id" value="<?php echo $row["id"]; ?>">

                    <!-- Title -->
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" value="<?php echo $row["title"]; ?>" required><br>

                    <!-- Content (Quill Editor) -->
                    <label for="content">Content:</label><br>
                    <div id="quill-editor"><?php echo $row["content"]; ?></div>
                    <input type="hidden" id="content" name="content" value=""><br>

                    <!-- Date -->
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" value="<?php echo $row["date"]; ?>" required><br>

                    <!-- Posted By -->
                    <label for="posted_by">Posted By:</label>
                    <input type="text" id="posted_by" name="posted_by" value="<?php echo $row["posted_by"]; ?>" required><br>

                    <!-- Tag -->
                    <label for="tag">Tag:</label>
                    <input type="text" id="tag" name="tag" value="<?php echo $row["tag"]; ?>"><br>

                    <!-- Existing Image -->
                    <!-- Existing Image -->
                    <label for="existing_image">Existing Image:</label><br>
                    <?php
                    $imagePath = $row['image'];

                    if (!empty($imagePath)) {
                        // Prepend the server's root directory to the image path
                        $absoluteImagePath = $_SERVER['DOCUMENT_ROOT'] . $imagePath;

                        echo '<img src="' . $absoluteImagePath . '" alt="Uploaded Image"><br>';
                    } else {
                        echo '<p>No image available for this post.</p>';
                    }
                    ?>
                    <!-- File Upload for Images -->
                    <label for="file">New Image Upload:</label>
                    <input type="file" id="file" name="file" accept="image/*"><br>

                    <!-- Submit Button -->
                    <input type="submit" value="Update">
                </form>

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
        <?php
            } else {
                echo "<p>No post found for the provided ID.</p>";
            }
        } else {
            echo "<p>No post ID provided in the URL.</p>";
        }

        // Close the database connection
        
        ?>
        
</body>

</html>