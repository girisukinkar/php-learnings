# Static methods and properties
Static methods are very useful as there is not need to instantiate the class before accessing the functions or variables, constants in it. we can just use `classname::variable` and get the value

    class home{
        const GREETING = 'Welcome to our house';

    }

    echo home::GREETING;
    //Output "Welcome to our house";

To access the variables in the class inside the functions we use `self` keyword and scope resolution operator `::`

    class home{
        const address = "10th street";

        public static function getAddress(){
            echo self::address;
        }
    }

and if we are to extend the class from another one we use the `parent` keyword to access the extending class variables
    
    class home
    {
        const GREETINGS = "Welcome to our House";
        public static function greeting()
        {
            return self::GREETINGS;
        }
    }


    class address extends home
    {

        public static function getAddress()
        {
            echo parent::greeting() . " We live near Wood mall Thane";
        }
    }

    //USECASE
    address::gettAddress();
    
    //OUTPUT
    Welcome to our House We live near Wood mall Thane
