<?php
header('Content-type:application/json');

/*��ȡ�ͻ���ҳ�洫���Ĳ���*/
@$id = $_REQUEST['id'];
if(empty($id)) //�жϲ���
{
    echo '[]';
    return;
}

//���� id ���������ݲ�ѯ
$conn = mysqli_connect('127.0.0.1','root','','kaifanla');
$sql = 'set names utf8';
mysqli_query($conn,$sql);
$sql = 'select * from kf_dish where did=$id';
$result = mysqli_query($conn,$sql);

//�������������json���鴮
$row = mysqli_fetch_assoc($result);
if(empty($row))
    echo '[]';
else
{
    $output[] = $row;
    echo json_encode($output);
}
?>
