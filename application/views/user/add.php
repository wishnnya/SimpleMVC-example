<?php include('includes/admin-users-nav.php'); ?>
<h2><?= $addAdminusersTitle ?></h2>

<form id="addUser" method="post" action="<?= \ItForFree\SimpleMVC\Router\WebRouter::link("admin/adminusers/add")?>"> 

    <div class="form-group">
        <label for="login">Введите имя пользователя</label>
        <input type="text" class="form-control" name="login" id="login" placeholder="имя пользователя">
    </div>
    <div class="form-group">
        <label for="pass">Введите пароль</label>
        <input type="text" class="form-control"  name="pass" id="pass" placeholder="пароль">
    </div>
    <div class="form-group">   
        <label for="role">Права доступа</label>
        <select name="role" id="role" class="form-control"> 
            <option value="admin">Администратор</option>
            <option value="auth_user">Зарегистрированный пользователь</option>
        </select>
    </div>
    <div class="form-group">
        <label for="email">Введите e-mail </label>
        <input type="text" class="form-control"  name="email" id="email" placeholder="адрес электропочты">
    </div>
    <!-- Пользователь активен-->
    <div class="form-group">
        <h5>Пользователь активен?</h5>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="active" id="active" value="1" checked>
            <label class="form-check-label" for="active">
                Активен
            </label>
        </div>
    </div>

    <input type="submit" class="btn btn-primary" name="saveNewUser" value="Сохранить">
    <input type="submit" class="btn" name="cancel" value="Назад">
</form>


