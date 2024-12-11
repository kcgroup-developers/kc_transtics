<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="content-type" content="text/html; charset=us-ascii">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/Logo KCT -No BG-01.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=us-ascii">
    <meta charset="utf-8">
    <script src="./../../kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link id="pagestyle" href="../assets/css/material-dashboard.mine63c.css?v=3.1.0" rel="stylesheet">
    <title>Upload Service</title>
    <!-- Include Quill stylesheet -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <style>
        .async-hide {
            opacity: 0 !important
        }
    </style>


    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        .container {
            display: flex;
            justify-content: space-between;
        }

        .upload-form,
        .table-service {
            flex: 0 0 48%;
            /* Adjust the width as needed */
        }

        .form-service {
            max-width: 100%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        textarea,
        input[type="file"],
        input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        textarea {
            height: 150px;
        }

        input[type="submit"] {
            background-color: #4D148C;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #4D148C;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .edit,
        .delete {
            display: inline-block;
            padding: 5px 10px;
            text-decoration: none;
            color: #f2f2f2;
            border: 1px solid;
            border-radius: 3px;
            margin-right: 5px;
        }

        .edit {
            background-color: #864ce0;
            color: #f2f2f2;
        }

        .delete {
            background-color: #d50312;
            color: #f2f2f2;
        }

        .edit:hover {
            background-color: #4D148C;
            color: #f2f2f2;
        }

        .delete:hover {
            background-color: #b0030f;
            color: #f2f2f2;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            text-align: center;
        }

        .modal-content button {
            margin: 5px;
            padding: 5px 10px;
            cursor: pointer;
        }

        .modal-content button:hover {
            background-color: #ddd;
        }

        .edit-delete-container {
            display: inline-block;
        }

        .edit,
        .delete {
            display: inline-flex;
            padding: 5px 10px;
            margin-right: 5px;
            text-decoration: none;
            color: #f2f2f2;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
        }

        .edit:hover,
        .delete:hover {
            background-color: #f4f4f4;
        }

        .delete {
            color: #f2f2f2;
            /* Red color for delete link */
        }

        .delete:hover {
            background-color: #fdd;
            /* Light red background on hover */
        }

        /* Additional CSS to display buttons inline */
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
                    <a class="nav-link text-white" href="../home.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div><span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white active" href="upload_service.php" style="background-color: #6f42c1 !important;">
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
                    <a class="nav-link text-white" href="./Project/upload_project.php">
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
        <div class="container" style="max-width: 1700px;">
            <div class="upload-form">
                <h3 class="title"></h3>
                <form action="process_service.php" class="form-service" method="POST" enctype="multipart/form-data">
                    <label for="title">Title:</label><br>
                    <input type="text" id="title" name="title"><br><br>

                    <label for="content">Content:</label><br>
                    <div id="quill-editor" style="height: 300px;"></div>
                    <input type="hidden" id="quill-content" name="quill-content" required><br><br>

                    <label for="image">Image:</label><br>
                    <input type="file" id="image" name="image" accept="image/*"><br><br>

                    <input type="submit" value="Upload">
                </form>
            </div>
            <div class="table-service">
                <h3 class="title"></h3>
                <table>
                    <tr>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Image Path</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    // Connect to the database
                    include '../PHP/config/db_conn.php';

                    // Select data from the table
                    $sql = "SELECT * FROM service";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output data as a table row
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["title"] . "</td>";
                            $content = strlen($row["content"]) > 100 ? substr($row["content"], 0, 100) . "..." : $row["content"];
                            echo "<td>" . $content . "</td>";
                            echo "<td><img src='" . $row["image"] . "' style='max-width: 100px; max-height: 100px;' /></td>";
                            echo "<td class='text-sm'>";
                            echo "<div class='edit-delete-container'>";
                            echo "<form id='delete-form-{$row["id"]}' action='deleteService.php' method='post'>";
                            echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
                            echo "<button type='button' class='delete' onclick='showDeleteConfirm({$row["id"]})'>Delete</button>";
                            echo "</form>";
                            echo "<a class='edit' href='updateService.php?id=" . $row["id"] . "'>Edit</a>";
                            echo "</div>";
                            echo "</td>";

                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3'>0 results</td></tr>";
                    }

                    $conn->close();
                    ?>
                </table>
            </div>
            <div class="overlay" id="overlay"></div>
            <div id="delete-confirm" class="delete-confirm">
                <div class="delete-confirm-content">
                    <p>Are you sure you want to delete this project?</p>
                    <button class='yes' onclick="deleteService()">Yes</button>
                    <button class='no' onclick="hideDeleteConfirm()">No</button>
                    <input type="hidden" id="delete-id" value="">
                </div>
            </div>

        </div>
        <!-- Include the Quill library -->
        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
        <script>
            var quill = new Quill('#quill-editor', {
                theme: 'snow'
            });

            // Set hidden input value with Quill editor's content
            var form = document.querySelector('form');
            form.onsubmit = function() {
                var quillContent = document.querySelector('.ql-editor').innerHTML;
                document.getElementById('quill-content').value = quillContent;
            };
        </script>

        <script>
            function showDeleteConfirm(id) {
                document.getElementById('delete-id').value = id;
                document.getElementById('overlay').style.display = 'block';
                document.getElementById('delete-confirm').classList.add('show');
            }

            function hideDeleteConfirm() {
                document.getElementById('overlay').style.display = 'none';
                document.getElementById('delete-confirm').classList.remove('show');
            }

            function deleteService() {
                var id = document.getElementById('delete-id').value;
                document.getElementById('delete-form-' + id).submit();
                hideDeleteConfirm();
            }
        </script>

</body>

</html>