<style>
    table, td, tr {border: 1px solid #ccc;
        border-collapse: collapse;}

    td { height:30px;
        width:200px;
        padding:5px;
    }

    .attr {
        width: 100px;
        text-align:center;
        background: #2B84D2;
        color: #fff;}
</style>

<table>
    <tr>
        <td class='attr'>Username</td>
        <td><?=$user['username'] ?></td>
    </tr>
    <tr>
        <td class='attr'>Password</td>
        <td><?=$user['password'] ?></td>
    </tr>
    <tr>
        <td class='attr'>Active</td>
        <td><?=$user['active'] ?></td>
    </tr>
    <tr>
        <td class='attr'>Email</td>
        <td><?=$user['email'] ?></td>
    </tr>
</table>
<br>
<br>
<form action="users/edit<?= $user['user_id'] ?>">
    <button class="btn btn-info">
        Edit <?=$user['username'] ?>
    </button>
</form>