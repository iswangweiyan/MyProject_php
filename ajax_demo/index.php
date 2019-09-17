<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="jquery-1.4.2.min.js"></script>
    </head>
   <?php
     //查询数据库
    $link = mysqli_connect("localhost", 'root', 'root', 'db');
    mysqli_query($link, "set names utf8;");
    $sql = "SELECT * FROM area WHERE ParentId = 0 ";
    $rs = mysqli_query($link, $sql);
    ///$arr = mysqli_fetch_array($rs);
   ?>
    <body>
        <select name="province" id="province" onchange="getCity(this.value)">
            <option value="">--请选择省份---</option>
            <?php
            while($arr = mysqli_fetch_array($rs)){
            ?>
            <option value="<?=$arr['Id']?>"><?php echo $arr['Province']?></option>
            <?php
            }
            ?>
        </select>
        <select name="city" id="city" onchange="getCounty(this.value)">
            <option value="">--请选择市 ---</option>
         </select>
         <select name="county" id="county">
            <option value="">--请选择县/区---</option>
        </select>
        <script type="text/javascript">
        function getCity(pid){
            if (pid > 0)
            {
                $.ajax({
                    url:"select.php",
                    type:"POST",
                    data:{id:pid,type:'c'},
                    dataType:"json",
                    success:function(data){
                       //var data = JSON.parse(data);
                       var str = '<option value="">--请选择市 ---</option>';
                       for(var i = 0 ; i < data.length;i++)
                       {
                           str +="<option value="+data[i].Id+">"+data[i].City+"</option>";
                       }
                       $("#city").html(str);
                    }
                });
            }
        }
        function getCounty(id){
            if (id > 0)
            {
                $.ajax({
                    url:"select.php",
                    type:"POST",
                    data:{id:id,type:'s'},
                    dataType:"json",
                    success:function(data){
                       //var data = JSON.parse(data);
                       var str = '<option value="">--请选择县/区---</option>';
                       for(var i = 0 ; i < data.length;i++)
                       {
                           str +="<option value="+data[i].Id+">"+data[i].District+"</option>";
                       }
                       $("#county").html(str);
                    }
                });
            }
        }
        </script>
    </body>
</html>
