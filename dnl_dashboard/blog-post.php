<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=us-ascii">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <title>DNL-Admin</title>
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
    <meta property="og:url" content="dashboard-2.html">
    <meta property="og:image" content="./../../s3.amazonaws.com/creativetim_bucket/products/450/original/material-dashboard.jpg">
    <meta property="og:description" content="Material Dashboard 2 is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful and organized. If you are looking for a tool to manage and visualize data about your business, this dashboard is the thing for you.">
    <meta property="og:site_name" content="Creative Tim">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700">
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet">
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet">
    <script src="./../../kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link id="pagestyle" href="./assets/css/material-dashboard.mine63c.css?v=3.1.0" rel="stylesheet">
    <style>
        .async-hide {
            opacity: 0 !important
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
    <style>
        /* Apply styles to the entire table */
        table.table {
            font-size: 14px;
            color: black;
            width: 100%;
            border-collapse: collapse;
        }

        /* Apply styles to table header cells */
        table.table th {
            text-align: left;
            padding: 8px;
            background-color: #f2f2f2;
            /* Light gray background color */
        }

        /* Apply styles to table data cells */
        table.table td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        /* Style alternating rows for better readability */
        table.table tr:nth-child(even) {
            background-color: #f9f9f9;
            /* Lighter gray background color for even rows */
        }

        /* Style links within the last column */
        table.table td:last-child a {
            margin-right: 5px;

            text-decoration: none;
        }

        /* Style links within the last column on hover */
        table.table td:last-child a:hover {
            text-decoration: underline;
        }

        table.table th {
            font-size: 12px;
            text-align: left;
            padding: 8px;
            background-color: #2a9c2f;
            /* Light gray background color */
        }

        .text-sm {
            font-size: small;
        }

        .edit,
        .delete {
            display: inline-block;
            padding: 5px 10px;
            margin-right: 10px;
            text-decoration: none;
            color: #fff;
            border-radius: 5px;
        }

        .edit {
            background-color: #1e47e9;
            /* Blue color for Edit button */
        }

        .delete {
            background-color: #fa2500;
            /* Red color for Delete button */
        }

        .edit:hover {
            background-color: #3498db;
            text-decoration: none;
            color: white;
            /* Darker color on hover */
        }

        .delete:hover {
            background-color: #e74c3c;
            text-decoration: none;
            color: white;
        }

        .post-table-container {
            max-height: 730px;
            /* Set the desired height */
            overflow-y: scroll;
        }

        .post-table thead {
            position: sticky;
            top: 0;
            background-color: #fff;
            /* Set your background color */
            z-index: 100;
        }
    </style>
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
                    <a class="nav-link text-white active bg-gradient-primary" href="index.html">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div><span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./Service/upload_service.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div><span class="nav-link-text ms-1">Service</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./PHP/createPost.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div><span class="nav-link-text ms-1">Blog Post</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="table.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">view_in_ar</i>
                        </div><span class="nav-link-text ms-1">Quotations</span>
                    </a>
                </li>
                <!-- <li class="nav-item">
          <a class="nav-link text-white" href="virtual-reality.html">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">view_in_ar</i>
          </div></a>
        </li> -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="./Project/upload_project.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
                        </div><span class="nav-link-text ms-1">Project</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./Feature/function.php">
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
                <nav aria-label="breadcrumb">

                    <h6 class="font-weight-bolder mb-0">Tables</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group input-group-outline">
                            <label class="form-label">Type here...</label> <input type="text" class="form-control">
                        </div>
                    </div>
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank" href="https://www.creative-tim.com/builder?ref=navbar-material-dashboard">Online Builder</a>
                        </li>
                        <li class="mt-2">
                            <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
                        </li>
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
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Blog Quotations</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <div class="post-table-container">
                                    <table class="table align-items-center mb-0 post-table">
                                        <thead>
                                            <tr>
                                                <th class="text-uppercase font-weight-bolder">No.</th>
                                                <th class="text-uppercase font-weight-bolder">Title</th>
                                                <th class="text-uppercase font-weight-bolder">Content</th>
                                                <th class="text-uppercase font-weight-bolder">Date</th>
                                                <th class="text-uppercase font-weight-bolder">Posted By</th>
                                                <th class="text-uppercase font-weight-bolder">Tag</th>
                                                <th class="text-uppercase font-weight-bolder">Image</th>
                                                <th class="text-uppercase font-weight-bolder">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include './PHP/config/db_conn.php';

                                            // Query to retrieve data from the database
                                            $sql = "SELECT id, title, content, date, posted_by, tag, image FROM posts";
                                            $result = $conn->query($sql);

                                            // Check if there are rows in the result
                                            if ($result->num_rows > 0) {
                                                // Output data of each row
                                                $serialNumber = 1; // Initialize serial number
                                                while ($row = $result->fetch_assoc()) {
                                                    echo "<tr>";
                                                    echo "<td class='font-weight-bold mb-0 text-sm'>" . $serialNumber . "</td>";
                                                    $title = substr($row["title"], 0, 20);
                                                    echo "<td class='mb-0 text-sm'>" . htmlspecialchars(strlen($row["title"]) > 20 ? $title . "..." : $title) . "</td>";
                                                    $content = substr($row["content"], 0, 100);
                                                    echo "<td class='mb-0 text-sm'>" . htmlspecialchars(strlen($row["content"]) > 100 ? $content . "..." : $content) . "</td>";
                                                    echo "<td class='text-center align-middle'><span class='text-sm'>" . htmlspecialchars($row["date"]) . "</span></td>";
                                                    echo "<td class='text-center mb-0 text-sm'>" . htmlspecialchars($row["posted_by"]) . "</td>";
                                                    echo "<td class='text-center mb-0 text-sm'>" . htmlspecialchars($row["tag"]) . "</td>";
                                                    echo "<td class='text-sm mb-0'>" . htmlspecialchars($row["image"]) . "</td>";
                                                    echo "<td class='text-sm'><a class='edit' href='./PHP/updateBlogPost.php?id=" . $row["id"] . "'>Edit</a><a class='delete' href='./PHP/delete.php?id=" . $row["id"] . "' onclick='return confirm(\"Are you sure?\");'>Delete</a></td>";
                                                    echo "</tr>";
                                                    $serialNumber++; // Increment serial number for the next row
                                                }
                                            } else {
                                                echo "<tr><td colspan='8' class='text-center'>No data found</td></tr>";
                                            }

                                            // Close the database connection
                                            $conn->close();
                                            ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        var tableBody = document.querySelector(".post-table-container tbody");

                        // Determine the number of rows to display (16 posts in this case)


                        // Loop to create table rows with dynamic serial numbers
                        for (var i = 0; i < numRows; i++) {
                            var row = document.createElement("tr");
                            var serialNumberCell = document.createElement("td");
                            serialNumberCell.textContent = i + 1; // Serial number starts from 1
                            row.appendChild(serialNumberCell);
                            // Add other cells based on your data
                            // For example: row.appendChild(createCell(data[i].id));
                            tableBody.appendChild(row);
                        }
                    });
                </script>
            </div>
            <footer class="footer py-4">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 mb-lg-0 mb-4">
                            <div class="copyright text-center text-sm text-muted text-lg-start">
                                ©
                                <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>, made with by <a href="https://www.creative-tim.com/" class="font-weight-bold" target="_blank">Creative Tim</a> for a better web.
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/" class="nav-link text-muted" target="_blank">Creative Tim</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>
    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2"><i class="material-icons py-2">settings</i></a>
        <div class="card shadow-lg">
            <div class="card-header pb-0 pt-3">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Material UI Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button"><i class="material-icons">clear</i></button>
                </div>
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0">
                <div>
                    <h6 class="mb-0">Sidebar Colors</h6>
                </div><a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start"></div>
                </a>
                <div class="mt-3">
                    <h6 class="mb-0">Sidenav Type</h6>
                    <p class="text-sm">Choose between 2 different sidenav types.</p>
                </div>
                <div class="d-flex">
                    <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button> <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button> <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
                </div>
                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                <div class="mt-3 d-flex">
                    <h6 class="mb-0">Navbar Fixed</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
                    </div>
                </div>
                <hr class="horizontal dark my-3">
                <div class="mt-2 d-flex">
                    <h6 class="mb-0">Light / Dark</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
                    </div>
                </div>
                <hr class="horizontal dark my-sm-4">
                <a class="btn bg-gradient-info w-100" href="https://www.creative-tim.com/product/material-dashboard-pro">Free Download</a> <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard">View documentation</a>
                <div class="w-100 text-center">
                    <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
                    <h6 class="mt-3">Thank you for sharing!</h6><a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">Tweet</a> <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">Share</a>
                </div>
            </div>
        </div>
    </div>
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/core/bootstrap.min.js"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <script async defer src="./../../buttons.github.io/buttons.js"></script>
    <script src="./assets/js/material-dashboard.mine63c.js?v=3.1.0"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"829f96d1aab83fc5","b":1,"version":"2023.10.0","token":"1b7cbb72744b40c580f8633c6b62637e"}' crossorigin="anonymous"></script>
</body>

</html>