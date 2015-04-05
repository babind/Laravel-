<? namespace Larabook\Forms;
use Laracasts\Validation\FormValidator;
class RegistrationForm extends FormValidator {

protected $rules=
[
'username' =>'required|unique:users',
'email'=>'required|email:users',
'password' => 'required|confirmed'
];


}