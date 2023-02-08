<?php
include('include/conn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="assets/style.css">

</head>

<body>
    <div class="container ">
        <div class="">
            <div class="headers ">Event Management System </div>
            <div class="models">
                <div>


                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                        Add New Event
                    </button>
                </div>

                <!-- The Modal -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Add New Event</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <label for="">Artist Name</label>
                                <input type="text" name="Name" id="eName" value="" /><br>
                                <label for="">City Name</label>
                                <input type="text" name="City" id="eCity" value="" />
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Add</button>
                                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Update</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <table>
                    <tr>
                        <th>Id</th>
                        <th>Artist Name</th>
                        <th>Location</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>bcndm</td>
                        <td>bcndm</td>
                        <td>bcndm</td>
                        <td>bcndm</td>
                    </tr>
                </table>
            </div>
        </div>

    </div>

</body>

</html>