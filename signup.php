<?php

require_once 'db.php';

$data = $_POST;

 
//если кликнули на button
if ( isset($data['do_signup']) )
{
// проверка формы на пустоту полей
    $errors = array();
    if ( $data['name'] == '' )
    {
        $errors[] = 'Введите имя';
    }
 
    if ( $data['surname'] == '' )
    {
        $errors[] = 'Введите фамилию';
    }
 
    if ( $data['patronymic'] == '' )
    {
        $errors[] = 'Введите отчество';
    }
 
    if ( $data['number'] == '' )
    {
        $errors[] = 'Введите номер членского билета';
    }

    if ( $data['reference'] == '' )
    {
        $errors[] = 'Введите номер справки МСЭ';
    }

    if ( $data['group'] == '' )
    {
        $errors[] = 'Введите группу инвалидности';
    }

    if ( $data['group'] > '3' )
    {
        $errors[] = 'Неверно введена группа';
    }

    if ( $data['phone'] == '' )
    {
        $errors[] = 'Введите номер телефона';
    }   
 
    //проверка на существование одинакового номера телефона
    if ( R::count('users', "phone = ?", array($data['phone'])) > 0)
    {
        $errors[] = 'Пользователь с таким номером телефона уже существует!';
    }
 
    //проверка на существование одинакового email
    if ( R::count('users', "email = ?", array($data['email'])) > 0)
    {
        $errors[] = 'Пользователь с таким Email уже существует!';
    }

 
    if ( empty($errors) )
    {
        //ошибок нет, теперь регистрируем
        $user = R::dispense('users');
        $user->name = $data['name'];
        $user->surname = $data['surname'];
        $user->patronymic = $data['patronymic'];
        $user->number = $data['number'];
        $user->reference = $data['reference'];
        $user->group = $data['group'];
        $user->email = $data['email'];
        $user->phone = $data['phone'];

         
        R::store($user);
        echo '<div style="color:dreen;">Вы успешно зарегистрированы!</div><hr>';

        //после регистрации перебрасываем пользователя на главную страницу
        header('Location: index.html');
        exit;
    }else
    {
        echo '<div id="errors" style="color:red;">' .array_shift($errors). '</div><hr>';
    }
 
}

?>