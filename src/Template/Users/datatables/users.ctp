<?php
$no = '';
foreach ($results as $result)
{
    $no++;
    $this->DataTables->prepareData([
        $no,
        h($result->username),
        h($result->last_login),
        $this->Html->tag('a','<i class="fa fa-trash m-r-5"></i>', ['href' => $this->request->getAttribute('webroot').'Users/hapus', $result->id,'class'=>'btn btn-xs btn-danger waves-effect waves-light'])
    ]);
}
echo $this->DataTables->response();