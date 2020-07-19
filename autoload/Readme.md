# Code in Vs code use Php server extension to run the code 
To autload all the classes from a directory we use php built in function `spl_auto_register` and make a common loader.php file
    
    spl_autoload_register();
The function searchs all directory for any classes and pass them as parameter. Thus we use a function to check whether the class file exists and include if it does.

    function loadClassesFromDirectory($classname)
    {
        $directory = 'classes/';
        $extension = '.php';
        $prefix = '.class';
        $fullPath = $directory  . $classname . $prefix . $extension;
        $alternatePath = $directory . $classname . $extension;
        if (file_exists($fullPath)) { // classes/home.class.php
            include $fullPath;
        } else if (file_exists($alternatePath)) { // [FILEPATH classes/model/home.class.php]
            include $alternatePath;
        } else {
            echo "error" . $classname;
            return false;
        }
    }

 it is better to use `.class.php` in the end as the classname parameter can become like `models(directory)/home(classname)` and we wont be able to use classes/models/class.home.php properly as we did in OneLoop platform

