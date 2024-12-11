<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=us-ascii">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/Logo KCT -No BG-01.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <title>DNL-Admin</title>
    <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700">
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet">
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet">
    <script src="./../../kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link id="pagestyle" href="../assets/css/material-dashboard.mine63c.css?v=3.1.0" rel="stylesheet">

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
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
    <title>Upload Image</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            /* Align items to the start */
            flex-wrap: wrap;
            /* Allow items to wrap */
            padding: 20px;
            max-width: 1610px;
        }

        .form-group {
            max-width: 600px;
            width: 100%;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .form-group,
        .table {
            flex: 1;
            /* Each element takes up equal space */
            margin: 10px;
            /* Add some space between elements */

            /* Set max-width to prevent stretching */
        }

        .table {
            width: 100%;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h2 {
            margin-top: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        form label {

            margin-bottom: 5px;
            font-weight: bold;
        }

        form input[type="text"],
        form input[type="file"],
        form select,
        form textarea {
            width: calc(100% - 16px);
            padding: 8px;

            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        form textarea {
            height: 100px;
            resize: vertical;
        }

        form select {
            width: 100%;
        }

        form input[type="submit"] {
            background-color: #4D148C;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        form input[type="submit"]:hover {
            background-color: #864ce0;
        }

        .text-sm {
            font-size: 14px;
        }

        .edit,
        .delete {
            display: inline-flex;
            padding: 5px 10px;
            margin-right: 5px;
            text-decoration: none;
            color: #333;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
        }

        .edit:hover,
        .delete:hover {
            background-color: #f4f4f4;
        }

        .delete {
            color: #f00;
            /* Red color for delete link */
        }

        .delete:hover {
            background-color: #fdd;
            /* Light red background on hover */
        }

        /* Additional CSS to display buttons inline */
        .edit-delete-container {
            display: inline-block;
        }

        .title {
            font-size: 16px;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fff;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 400px;
            border-radius: 5px;
            position: relative;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        /* Overlay for the popup */
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        .delete-confirm.show {
            display: block;
        }

        /* Center the delete confirmation dialog */
        .delete-confirm {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 1001;
        }

        .delete-confirm-content {
            text-align: center;
        }

        .delete-confirm-content p {
            margin-bottom: 20px;
        }

        .delete-confirm-content button {

            padding: 5px 10px;
            border: none;
            cursor: pointer;
            border-radius: 3px;
        }

        .delete-confirm-content button.yes {
            background-color: green;
            color: white;
        }

        .delete-confirm-content button.no {
            background-color: red;
            color: white;
        }

        .delete-confirm-content button.yes:hover {
            background-color: darkgreen;
        }

        .delete-confirm-content button.no:hover {
            background-color: darkred;
        }
    </style>
</head>

<body class="g-sidenav-show bg-gray-200">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header" style="margin-left:50px; margin-top:20px;">
            <a class="navbar-brand m-0" href="home.php" target="_blank"><img src="../assets/Logo KCT -No BG-01.png" alt="main_logo" style="width:35%; "></a>
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
                    <a class="nav-link text-white" href="../Service/upload_service.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div><span class="nav-link-text ms-1">Service</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../PHP/createPost.php">
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
                    <a class="nav-link text-white active" href="./Project/upload_project.php" style="background-color: #6f42c1 !important;">
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
                <div class="form-container" style="display:flex;">
                    <div class="form-group">
                        <h2 class="title">Upload Project</h2>
                        <form action="process_project.php" method="post" enctype="multipart/form-data">
                            <label for="company_name">Company Name:</label><br>
                            <input type="text" id="company_name" name="company_name" required><br><br>

                            <label for="type_of_product">Type of Product:</label><br>
                            <input type="text" id="type_of_product" name="type_of_product" required><br><br>

                            <label for="description">Description:</label><br>
                            <textarea id="description" name="description" rows="4" required></textarea><br><br>

                            <label for="category">Category:</label><br>
                            <select id="category" name="category" required>
                                <option value="">(select category)</option>
                                <option value="Import">Import</option>
                                <option value="Export">Export</option>
                            </select><br><br>

                            <label for="file">Image Upload:</label><br>
                            <input type="file" id="file" name="file" accept="image/*" required><br><br>

                            <input type="submit" value="Upload">
                        </form>
                    </div>
                    <div class="table" style="width:50%;">
                        <h2 class="title">Projects</h2>
                        <div style="height: 550px; overflow-y: auto;">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Company Name</th>
                                        <th>Type of Product</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Database connection
                                    include '../PHP/config/db_conn.php';

                                    // Fetch data from the database
                                    $sql = "SELECT * FROM project";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // Output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>" . $row["company_name"] . "</td>";
                                            echo "<td>" . $row["type_of_product"] . "</td>";
                                            echo "<td>" . $row["description"] . "</td>";
                                            echo "<td>" . $row["category"] . "</td>";
                                            echo "<td><img src='" . $row["image"] . "' width='100'></td>";
                                            echo "<td class='text-sm'>";
                                            echo "<div class='edit-delete-container'>";
                                            echo "<form id='delete-form-{$row["project_id"]}' action='deleteProject.php' method='post'>";
                                            echo "<input type='hidden' name='id' value='" . $row["project_id"] . "'>";
                                            echo "<button type='button' class='delete' onclick='showDeleteConfirm({$row["project_id"]})'>Delete</button>";
                                            echo "</form>";
                                            echo "<a class='edit' href='update_project.php?id=" . $row["project_id"] . "'>Edit</a>";
                                            echo "</div>";
                                            echo "</td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='5'>No projects found</td></tr>";
                                    }
                                    $conn->close();
                                    ?>
                                </tbody>
                            </table>
                            <div class="overlay" id="overlay"></div>
                            <div id="delete-confirm" class="delete-confirm">
                                <div class="delete-confirm-content">
                                    <p>Are you sure you want to delete this project?</p>
                                    <button class='yes' onclick="deleteProject()">Yes</button>
                                    <button class='no' onclick="hideDeleteConfirm()">No</button>
                                    <input type="hidden" id="delete-project-id" value="">
                                </div>
                            </div>

                        </div>
                    </div>

                    <script>
                        function showDeleteConfirm() {
                            document.getElementById('overlay').style.display = 'block';
                            document.getElementById('delete-confirm').classList.add('show');
                        }

                        function hideDeleteConfirm() {
                            document.getElementById('overlay').style.display = 'none';
                            document.getElementById('delete-confirm').classList.remove('show');
                        }

                        function deleteProject() {
                            var projectId = document.getElementById('delete-project-id').value;
                            document.getElementById('delete-form-' + projectId).submit();
                            hideDeleteConfirm();
                        }
                    </script>

                </div>

            </div>
    </main>




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