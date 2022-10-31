<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <style>
        footer label {
            display: inline-block;
            background-color: indigo;
            color: white;
            padding: 0.5rem;
            font-family: sans-serif;
            border-radius: 0.3rem;
            cursor: pointer;
            margin-top: 1rem;
        }
    </style>


</head>

<body>

    <form style="border:1px solid #495057" class="container ">
        <div class="m-5">
            <div class="form-group">
                <label for="exampleFormControlInput1">Header</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Header">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Title</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Shoulder</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Shoulder">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Details</label>
                <textarea class="form-control" id="exampleFormControlTextarea2" rows="8"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Brief Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea2" rows="6"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Author Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Author Name">
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <br>
                <input type="file" id="myFile" name="filename">
                <input type="submit">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Symbol Name</label>
                <select class="custom-select">
                    <option selected>Choose One</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Photo Details</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Photo Details">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Tags</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tags">
                <br>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Select Some Options">

            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">News Category</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Select Some Options">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Photo Details</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Photo Details">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Section</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">Print</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">Online</label>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Extra Feature</label>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                    <label class="custom-control-label" for="customSwitch1">Publish</label>
                </div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch2">
                    <label class="custom-control-label" for="customSwitch2">Sticky</label>
                </div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch3">
                    <label class="custom-control-label" for="customSwitch3">Lead</label>
                </div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch4">
                    <label class="custom-control-label" for="customSwitch4">Exclusive</label>
                </div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch5">
                    <label class="custom-control-label" for="customSwitch5">If you missed</label>
                </div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch6">
                    <label class="custom-control-label" for="customSwitch6">Editorial</label>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Publish Date</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Select Some Options">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Division</label>
                <select class="custom-select">
                    <option selected>Choose One</option>
                    <option value="1">Barisal</option>
                    <option value="2">Chittagong</option>
                    <option value="3">Dhaka</option>
                    <option value="1">Khulna</option>
                    <option value="2">Rajshahi</option>
                    <option value="3">Rangpur</option>
                    <option value="3">Sylhet </option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">District</label>
                <select class="custom-select">
                    <option selected>Choose One</option>
                    <option value="1">Barisal</option>
                    <option value="2">Kushtia</option>
                    <option value="3">Dhaka</option>
                    <option value="1">Khulna</option>
                    <option value="2">Pabna</option>
                    <option value="3">Mymensingh</option>
                    <option value="3">Dinajpur</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Author</label>
                <select class="custom-select">
                    <option selected>Choose One</option>
                    <option value="1">Mr X</option>
                    <option value="2">Mr Y</option>
                    <option value="3">Mr Z</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Editor</label>
                <select class="custom-select">
                    <option selected>Choose One</option>
                    <option value="1">Mr X</option>
                    <option value="2">Mr Y</option>
                    <option value="3">Mr Z</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Occasion</label>
                <select class="custom-select">
                    <option selected>Choose One</option>
                    <option value="1">Mr X</option>
                    <option value="2">Mr Y</option>
                    <option value="3">Mr Z</option>
                </select>
            </div>
        </div>
        <footer class="container d-flex justify-content-end ">
            <!-- <button class="mr-5 btn btn-info">Reset</button>
            <button class="mr-5 btn btn-primary">Upload</button> -->
            <div class="mr-5">
                <input type="file" id="upload" hidden />
                <label for="upload">Upload</label>
            </div>
            <div class="mr-5">
                <input type="file" id="upload" hidden />
                <label for="upload">Reset</label>
            </div>

        </footer>
    </form>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>