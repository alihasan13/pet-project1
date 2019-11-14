<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--        <link rel="stylesheet" href="bootstrap.min.css">-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="container">
                <?php require_once 'topbar.php';?>
                <div class="row ">
                    <?php require_once 'sidebar.php';?>
                    <div class="col mainContent ">
                        <?php //require_once 'slider.php'; ?>
                        <h2> Register Here </h2>
                        <div id="form" >
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label class="form-check-label" for="firstname">First Name</label>
                                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Ex: Ali">
                                </div>
                                <div class="form-group">
                                    <label class="form-check-label" for="lastname">Last Name</label>
                                    <input type="text" class="form-control"  name="lastname" id="lastname" placeholder="Ex: Hasan">
                                </div>
                                <div class="form-group">
                                    <label class="form-check-label" for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="example@gmail.com">
                                </div>
                                
                                
                                <div class="form-group">
                                    <label for="inputState">Select Your City</label>
                                    <select id="inputState" name="city" class="form-control">
                                        <option selected>Select your city..</option>
                                        <option>Dhaka</option>
                                        <option>Rajshahi</option>
                                        <option>Khulna</option>
                                        <option>Chottogram</option>
                                        <option>Rongpur</option>
                                        <option>Barishal</option>
                                        
                                    </select>
                                </div>
                                <div class="form-group ">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label class="form-check-label" for="inlineCheckbox1">Select Your Interests</label>
                                </div>
                                <div class="form-check form-group px-3 form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="check" id="inlineCheckbox1" value="datascience">
                                    <label class="form-check-label" for="inlineCheckbox1">Data Science </label>
                                </div>
                                <div class="form-check form-group px-3 form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="check" id="inlineCheckbox2" value="artificialintelligence">
                                    <label class="form-check-label" for="inlineCheckbox2">Artificial Intelligence </label>
                                </div>
                                <div class="form-check form-group px-3 form-check-inline">
                                    <input class="form-check-input" type="checkbox"name="check"  id="inlineCheckbox3" value="bigdata">
                                    <label class="form-check-label" for="inlineCheckbox3">Big Data</label>
                                </div>
                                <fieldset class="form-group">
                                    <div class="row">
                                        <legend class="col-form-label col-md-2 pt-0">Gender</legend>
                                        <div class="col-sm-10">
                                            <div class="form-check py-2">
                                                <input class="form-check-input py-2" type="radio" name="radio" id="male" value="male" checked>
                                                <label class="form-check-label " for="gridRadios1">
                                                    Male
                                                </label>
                                            </div>
                                            <div class="form-check py-2">
                                                <input class="form-check-input" type="radio" name="radio" id="female" value="female" checked>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Female
                                                </label>
                                            </div>
                                            <div class="form-check py-2">
                                                <input class="form-check-input" type="radio" name="radio" id="others" value="others">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Others
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-group">
                                    <label class="form-check-label" for="image">Image</label>
                                    <input type="file" name="image" class="form-control-file" id="image">
                                </div>
                                <div class=" form-group col-auto my-1">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php require_once 'footer.php'; ;?>
            </div>
        </div>
        
<!--        <script type="text/javascript" src="js/bootstrap.min.js"></script>-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
    </body>
</html>
