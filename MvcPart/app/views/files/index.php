<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/PaginaFilesV2.css">
    <script src="https://kit.fontawesome.com/9ab9988c3d.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/jpg" href="/images/favicon.jpg" />
    <title>Cabinet Medical Web Management</title>
</head>
<body>
    <header>
        <ul>
            <?=$data['generalbar']?>
        </ul>
    </header>
    <main>
        <h2>Patient Files</h2>
        <div class="files">
            <div class="files__select_no_pages">
                <label>Rows per page</label>
                <select class="files__select_no_pages_select">
                    <option value="Default"> 10 </option>
                    <option value="25"> 25 </option>
                    <option value="50"> 50 </option>
                    <option value="100"> 100</option>
                </select>
            </div>

            <label>Result 1-10 of 150</label>
            <button type="button" class="files__left_page_btn" id="files_leftBtn">&#9668;</button>
            <button type="button" class="files__right_page_btn" id="files_rightBtn">&#9658;</button>
            <table>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Type</th>
                    <th>Value</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Maria Popescu</td>
                    <td>20/03/19</td>
                    <td>Consultation</td>
                    <td>Some results</td>
                    <td><i class="fas fa-edit"><i class="fas fa-trash-alt"></i></i></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Maria Popescu</td>
                    <td>20/03/19</td>
                    <td>Consultation</td>
                    <td>Some results</td>
                    <td><i class="fas fa-edit"><i class="fas fa-trash-alt"></i></i></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Maria Popescu</td>
                    <td>20/03/19</td>
                    <td>Consultation</td>
                    <td>Some results</td>
                    <td><i class="fas fa-edit"><i class="fas fa-trash-alt"></i></i></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Maria Popescu</td>
                    <td>20/03/19</td>
                    <td>Consultation</td>
                    <td>Some results</td>
                    <td><i class="fas fa-edit"><i class="fas fa-trash-alt"></i></i></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Maria Popescu</td>
                    <td>20/03/19</td>
                    <td>Consultation</td>
                    <td>Some results</td>
                    <td><i class="fas fa-edit"><i class="fas fa-trash-alt"></i></i></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Maria Popescu</td>
                    <td>20/03/19</td>
                    <td>Consultation</td>
                    <td>Some results</td>
                    <td><i class="fas fa-edit"><i class="fas fa-trash-alt"></i></i></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Maria Popescu</td>
                    <td>20/03/19</td>
                    <td>Consultation</td>
                    <td>Some results</td>
                    <td><i class="fas fa-edit"><i class="fas fa-trash-alt"></i></i></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Maria Popescu</td>
                    <td>20/03/19</td>
                    <td>Consultation</td>
                    <td>Some results</td>
                    <td><i class="fas fa-edit"><i class="fas fa-trash-alt"></i></i></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Maria Popescu</td>
                    <td>20/03/19</td>
                    <td>Consultation</td>
                    <td>Some results</td>
                    <td><i class="fas fa-edit"><i class="fas fa-trash-alt"></i></i></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Maria Popescu</td>
                    <td>20/03/19</td>
                    <td>Consultation</td>
                    <td>Some results</td>
                    <td><i class="fas fa-edit"><i class="fas fa-trash-alt"></i></i></td>
                </tr>
                <!-- <tr>
                        <td>1</td>
                        <td>Maria Popescu</td>
                        <td>20/03/19</td>
                        <td>Consultation</td>
                        <td>Some results</td>
                        <td><i class="fas fa-edit"><i class="fas fa-trash-alt"></i></i></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Maria Popescu</td>
                        <td>20/03/19</td>
                        <td>Consultation</td>
                        <td>Some results</td>
                        <td><i class="fas fa-edit"><i class="fas fa-trash-alt"></i></i></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Maria Popescu</td>
                        <td>20/03/19</td>
                        <td>Consultation</td>
                        <td>Some results</td>
                        <td><i class="fas fa-edit"><i class="fas fa-trash-alt"></i></i></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Maria Popescu</td>
                        <td>20/03/19</td>
                        <td>Consultation</td>
                        <td>Some results</td>
                        <td><i class="fas fa-edit"><i class="fas fa-trash-alt"></i></i></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Maria Popescu</td>
                        <td>20/03/19</td>
                        <td>Consultation</td>
                        <td>Some results</td>
                        <td><i class="fas fa-edit"><i class="fas fa-trash-alt"></i></i></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Maria Popescu</td>
                        <td>20/03/19</td>
                        <td>Consultation</td>
                        <td>Some results</td>
                        <td><i class="fas fa-edit"><i class="fas fa-trash-alt"></i></i></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Maria Popescu</td>
                        <td>20/03/19</td>
                        <td>Consultation</td>
                        <td>Some results</td>
                        <td><i class="fas fa-edit"><i class="fas fa-trash-alt"></i></i></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Maria Popescu</td>
                        <td>20/03/19</td>
                        <td>Consultation</td>
                        <td>Some results</td>
                        <td><i class="fas fa-edit"><i class="fas fa-trash-alt"></i></i></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Maria Popescu</td>
                        <td>20/03/19</td>
                        <td>Consultation</td>
                        <td>Some results</td>
                        <td><i class="fas fa-edit"><i class="fas fa-trash-alt"></i></i></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Maria Popescu</td>
                        <td>20/03/19</td>
                        <td>Consultation</td>
                        <td>Some results</td>
                        <td><i class="fas fa-edit"><i class="fas fa-trash-alt"></i></i></td>
                    </tr> -->
            </table>

        </div>
    </main>



    <footer>
        <p>Cabinet Medical Web Management</p>
    </footer>
</body>
</html>