<?php
require_once "/xampp/htdocs/polyfood/dao/pdo.php";
function insert_users($user_name, $password, $name, $email, $phone, $image, $role)
{
    $sql = "INSERT INTO users(user_name, password,name, email, phone, image, role) 
                      VALUES ( '$user_name', '$password','$name', '$email', '$phone', '$image', $role)";
    pdo_execute($sql);
}
function update_users($user_name, $password, $name, $email, $phone, $image, $role, $user_id)
{
    $sql = "UPDATE users SET user_name='$user_name', password='$password',name='$name', email='$email', phone='$phone', image='$image', role=$role WHERE user_id=$user_id";
    pdo_execute($sql);
}
function delete_users($user_id)
{
    if (is_array($user_id)) {
        foreach ($user_id as $ma) {
<<<<<<< HEAD
    $sql = "DELETE FROM users WHERE user_id=$ma";

            pdo_execute($sql);
        }
    }
    else{
    $sql = "DELETE FROM users  WHERE user_id=$user_id";
=======
            $sql = "DELETE FROM users WHERE user_id=$ma";

            pdo_execute($sql);
        }
    } else {
        $sql = "DELETE FROM users  WHERE user_id=$user_id";
>>>>>>> congtiendev

        pdo_execute($sql);
    }
}
function select_all_users()
{
    $sql = "SELECT * FROM users";
    return pdo_query($sql);
}
function select_by_id_users($user_id)
{
    $sql = "SELECT * FROM users WHERE user_id=$user_id";
    return pdo_query_one($sql);
}
<<<<<<< HEAD
function select_by_name_users($user_name){
    $sql = "SELECT * FROM users WHERE user_name='$user_name'";
    return pdo_query_one($sql);
}
function users_exist_by_id($user_id){
    $sql = "SELECT count(*) FROM users WHERE user_id=$user_id";
    return pdo_query_value($sql) > 0;
}
function users_exist_by_username($user_name){
    $sql = "SELECT count(*) FROM users WHERE user_name='$user_name'";
    return pdo_query_value($sql) > 0;
}
function select_users_by_role($role) {
=======
function select_by_name_users($user_name)
{
    $sql = "SELECT * FROM users WHERE user_name='$user_name'";
    return pdo_query_one($sql);
}
function users_exist_by_id($user_id)
{
    $sql = "SELECT count(*) FROM users WHERE user_id=$user_id";
    return pdo_query_value($sql) > 0;
}
function users_exist_by_username($user_name)
{
    $sql = "SELECT count(*) FROM users WHERE user_name='$user_name'";
    return pdo_query_value($sql) > 0;
}
function select_users_by_role($role)
{
>>>>>>> congtiendev
    $sql = "SELECT * FROM users WHERE role=$role";
    return pdo_query($sql);
}
<<<<<<< HEAD
function users_change_password_by_id($user_id, $password) {
    $sql = "UPDATE users SET password='$password' WHERE user_id=$user_id";
    pdo_execute($sql);
}
function users_change_password_by_username($user_name, $password) {
    $sql = "UPDATE users SET password='$password' WHERE user_name='$user_name'";
    pdo_execute($sql);
}
?>
=======
function users_change_password_by_id($user_id, $password)
{
    $sql = "UPDATE users SET password='$password' WHERE user_id=$user_id";
    pdo_execute($sql);
}
function users_change_password_by_username($user_name, $password)
{
    $sql = "UPDATE users SET password='$password' WHERE user_name='$user_name'";
    pdo_execute($sql);
}
>>>>>>> congtiendev
