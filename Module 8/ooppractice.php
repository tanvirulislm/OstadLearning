<?php

// BasicUserProfile

// class User{
//     function __construct(public $name, public $email, public $age){
//         $this->name = $name;
//         $this->email = $email;
//         $this->age = $age;
//     }
//     public function userProfile(){
//         echo "Name : $this->name, Email: $this->email, Age: $this->age \n";
//     }
//     public function updateEmail($newEmail){
//        $this->email = $newEmail;
//     }
// }

// $tanvir = new User("Tanvirul Islam", "hello@tanvirulislam.xyz", 24);
// $tanvir->userProfile();

// $tanvir->updateEmail("hello@goolge.com");
// $tanvir->userProfile();



// Bank Account Simulation
// class BankAccount{
//     function __construct(public $accountHolder, public $balance){
//         $this->accountHolder = $accountHolder;
//         $this->balance = $balance;
//     }
//     function deposit($ammount){
//         $this->balance += $ammount;
//         echo "Deposited : $ammount \n";
//     }
//     function withdraw($ammount){
//         if($this->balance >= $ammount){
//             $this->balance -= $ammount;
//             echo "Withdrew : $ammount \n";
//             echo"------------------------------- \n";
//         }else{
//             echo "Insufficient funds to withdraw : $ammount \n";
//             echo"------------------------------- \n";
//         }
//     }
//     function getBalance(){
//         echo "Your current balance is : $this->balance \n";
        
//     }
// }

// $account = new BankAccount("Tanvirul Islam",1500);
// $account ->deposit(500);
// $account -> withdraw(150);
// $account->getBalance();
// $account -> withdraw(15000);
// $account->getBalance();

// Product Inventory

// class Product{
//     function __construct(public $name, public $price, public $quantity){
//         $this->name = $name;
//         $this->quantity = $quantity;
//         $this->price = $price;
//         echo "Previus Stock was $this->quantity \n";
//     }
//     function addStock($amount){
//         $this->quantity += $amount;
//         echo "Added Stock : $amount \n";
//     }
//     function sellProduct($amount){
//         if($this->quantity >= $amount){
//             $this->quantity -=$amount;
//             echo "Sold Stock : $amount \n";
//             echo "------------------------------------------------ \n";
//     }else{
//         echo "Not enough stock available. \n";
//         echo "------------------------------------------------- \n";
//     }
//     }
//     function getProductInfo(){
//         echo "Product Name: $this->name, Product Quantity: $this->quantity, Product Price: $this->price";
//     }
// }

// $product = new Product("Wallet", 1480, 15);
// $product->addStock(15);
// $product->sellProduct(2);
// $product->getProductInfo();

// Quiz Application

class Question{
    public $questionText;
    public $options;
    public $correctAnswer;
    public function __construct($questionText, $options, $correctAnswer){
        $this->questionText = $questionText;
        $this->options = $options;
        $this->correctAnswer = $correctAnswer;
    }
    public function isAnswerCorrect($userAnswer){
        if($userAnswer == $this->correctAnswer){
            return $userAnswer == $this->correctAnswer;
        }
    }
}
class Quiz{
    public $questions = [];
    public $score = 0;

    public function addQuestion($question){
        $this->questions[] = $question;
    }
    public function takeQuiz(){
        foreach($this->questions as $question){
            echo $question->questionText . "\n";
            foreach($question->options as $index => $option){
                echo ($index + 1) .":". $option ." \n";
            }
        }
        $userAnswerIndex = (int)fgets(STDIN);
        $userAnswer = $question->options [$userAnswerIndex - 1];
        if($question->isAnswerCorrect($userAnswer)){
            echo "Your answer is correct \n";
            $this->score++;
        }else{
            echo "Wrong answer, please try agin \n";
        }
        echo "------------------------------------------------\n";
        echo "Your total score is: $this->score out of " . count($this->questions) . "\n";
    }
}

$quiz = new Quiz();
$quiz->addQuestion("What is the capital of Bangladesh", ["Dhaka", "Sylhet", "Rajshahi", "Khulna"], "Dhaka");
$quiz->addQuestion("What is tea capital of Bangladesh", ["Dhaka","Sylhet", "Rajshahi", "Narsingdi"], "Sylhet");
$quiz->takeQuiz();