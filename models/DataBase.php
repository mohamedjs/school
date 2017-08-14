<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DataBaseConnection
 *
 * @author Smart1
 */
class DataBase
{
    private $username ;
    private $host ;
    private $DataBaseName ;
    private $password ;
    private $link ;
            
    function __construct() 
    {
        $this->username="root";
        $this->host = "localhost" ;
        $this->password = "";
        $this->DataBaseName = "english school" ;
        $this->connection();
    }
    private function connection()
    {
        $this->link =mysqli_connect($this->host, $this->username, $this->password, $this->DataBaseName) ;
        if(mysqli_connect_errno()!=0)
            throw new Exception("Data Base Connection is faild ");
    }
    /*private function connection()
    {
         
        $this->link= new PDO("mysql :host=$this->host ; dbname=$this->DataBaseName",$this->username, $this->password ,
                array (PDO ::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION) );
        
        $this->link =mysqli_connect($this->host, $this->username, $this->password, $this->DataBaseName) ;
        if(mysqli_connect_errno()!=0)
            throw new Exception("Data Base Connection is faild ");
       
    }*/
   
    
    public function query($query)
    {
        return mysqli_query($this->link, $query);
    }
    public function getconnection()
    {
        return $this->link ;
    }
    private function close()
    {
        mysqli_close($this->link);
    }
    function mysqli_field_flags($result, $field_offset) {
    static $flags;
    $flags_num = mysqli_fetch_field_direct($result, $field_offset)->flags;
    if (!isset($flags)) {
        $flags = array();
        $constants = get_defined_constants(true);
        foreach ($constants['mysqli'] as $c => $n) if (preg_match('/MYSQLI_(.*)_FLAG$/', $c, $m)) if (!array_key_exists($n, $flags)) $flags[$n] = $m[1];
    }
    $result = array();
    foreach ($flags as $n => $t) if ($flags_num & $n) $result[] = $t;
    $return = implode(' ', $result);
    $return = str_replace('PRI_KEY','PRIMARY_KEY', $return);
    $return = strtolower($return);
    return $return;
}

    function searchGrid($query , $updateok=false , $deleteok=false , $editpage="",$deleteController="" , $returnpage="" , $editTableName="" , $idName="")
    {
        try{
        $result = $this->query($query);
        $fieldsNUM = mysqli_num_fields($result);
        $tdl =
        " <script>"
        ."var prev =1;"
        ."function highLightRow(rowno){"
            ."if(rowno%2 == 0 )" 
            ."tdlSearch.rows[prev].bgColor='#eedd99';"
            ."else{tdlSearch.rows[prev].bgColor='#ddcc99';}"
            ."tdlSearch.rows[rowno].bgColor='white' ;"
            ."prev=rowno ;}</script>";
        $tdl .= "<table id='tdlSearch' align='center' border=0 > <tr bgcolor = black>";
        for($col=0 ;$col<  $fieldsNUM ; $col++)
        {
            $obj = mysqli_fetch_field_direct($result, $col);
            $tdl .= "<\n<th><font color=white>".  $obj->orgname."</font></th>";
            $flage = $this->mysqli_field_flags($result, $col);
            $isgetpkcol = false ;
            if(strpos($flage, "primary_key") && $isgetpkcol==false)
            {
                    $pkcol = $col ;
                    $isgetpkcol= true ;
            }
        }
        //show ubdate delate
        if($updateok)
        {
            $tdl .= "\n <td><font color=white >Edit</font></td>";
        }
        if($deleteok)
        {
            $tdl .= "\n <td><font color=white >Delete</font></td>";
        }
        
        $rownow = 1 ;
        $tdl .= "\n </tr>";
        while($row =  mysqli_fetch_row($result))
        {
            $tdl .= "<tr onmousemove=\"highLightRow($rownow)\" bgcolor=";
            if($rownow %2 == 0){ $tdl .= "#eedd99>" ;}
            else{ $tdl .="#ddcc99>" ;}
            for($col=0 ; $col<$fieldsNUM ; $col++)
            {
                $tdl .= "<td> $row[$col] </td>";
                
            }
            if($updateok)
            {
                $tdl .= "\n <td><a href='$editpage?pkval=$row[$pkcol]' ><img src='../images/edit.png' alt='edit' /></a></td>";
            }
            if($deleteok)
            {
                $obj = mysqli_fetch_field_direct($result, $pkcol);
                if($editTableName=="")
                {
                    $table = $obj->orgtable ;
                    echo $table;
                }
                else
                {
                    $table = $editTableName ;
                    echo $table ;
                }
                
                
                if($idName=="")
                {
                $pkname = $obj->orgname;
                }
                else
                {
                    $pkname = $idName ;
                }
                $tdl .= "\n <td><a href='$deleteController?table=$table&pk=$pkname&pkval=$row[$pkcol]&page=$returnpage' >"
                        . "<img  src='../images/remove.png' alt='edit' /></a></td>";
            }
            
            $tdl .= "</tr>";
            $rownow++;
        }
        return $tdl."</table>" ;
        }
        catch (Exception $ex)
        {
            return $ex ;
        }
    }
    
}

