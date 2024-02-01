<!--membuat aplikasi dari templet-->
<?php
$todos = [];
if(file_exists('todo.txt'))
{
    $file = file_get_contents('todo.txt');
    $todos = unserialize($file);
}
if(isset($_POST['todo']))
{
    $data = $_POST['todo'];
    $todos[]=[
        'todo' => $data,
        'status'=>0
    ];
    $daftar_belanja=serialize($todos);
    simpanData($daftar_belanja);
}
if(isset($_GET['status']))
{
    $todos[$_GET['key']]['status']=$_GET['status'];
    $daftar_belanja=serialize($todos);
    simpanData($daftar_belanja);
}
if(isset($_GET['hapus']))
{
    unset($todos[$_GET['key']]);
    $daftar_belanja=serialize($todos);
    simpanData($daftar_belanja);
}
function simpanData($daftar_belanja)
{
    file_put_contents('todo.txt',$daftar_belanja);
    header('location:tmplt.php');
}
print_r($todos);
?>
<h1>Todo Apps</h1>
<form action="" method="POST">
    <label>Daftar Belanja Hari ini</label><br>
    <input type="text" name="todo">
    <button type="submit">Simpan</button>
</form>
<ul>
    <ul>
        <?php foreach($todos as $key=>$value): ?>
        <li>
            <input type="checkbox" name="todo" onclick="window.location.href='tmplt.php?status=<?php echo($value['status']==1)? '0': '1'; ?>&key=<?php echo $key;?>'";
            <?php if($value['status']==1)echo 'checked'?>
            <label>
                <?php 
                if ($value['status']==1) 
                {
                    echo '<del?>'.$value['todo'].'</del>';
                }
                else
                {
                    echo $value['todo'];
                }
                ?>
            </label>
                <a href="tmplt.php?hapus=1&key=<?php echo $key;?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">hapus</a>
        </li>
        <?php endforeach; ?>
    </ul>
</ul>