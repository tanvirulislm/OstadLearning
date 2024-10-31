<?php

interface bankAccount{
    public function credit(int $amount,string $time,string $acc);
    public function debit(int $amount,string $time,string $acc,int $balance);
}


class ManageBankAccount implements bankAccount{

    public function credit(int $amount, string $time, string $acc)
    {
        
    }

    public function debit(int $amount, string $time, string $acc, int $balance)
    {
        
    }


}