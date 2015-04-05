<?php namespace Larabook\Registration;

use Laracasts\Commander\CommandHandler;

class RegisrationCommandHandler implements CommandHandler{


  public function handle($command){
    dd($command);
  }
}