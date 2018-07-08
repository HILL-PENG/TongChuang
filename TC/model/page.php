<?php
// class Page{
//     /*
//      * 获取分页字符串
//      * @param1 string $uri，分页要请求的脚本url
//      * @param3 int $counts，总记录数
//      * @param4 int $length，每页显示的记录数
//      * @param5 int $page = 1，当前页码
//      * @return string，带有a标签的，可以点击发起请求的字符串
//     */
//     public static function getPageStr($uri,$counts,$length,$page = 1){
//       //构造一个能够点击的字符串
//       //得到数据显示的字符串
//       $pagecount = ceil($counts/$length);        //总页数
//       $str_info = "当前一共有{$counts}条记录，每页显示{$length}条记录，一共{$pagecount}页，当前是第{$page}页";
//       //生成可以操作的连接：首页 上一页 下一页 末页
//       //求出上一页和下一页页码
//       $prev = ($page <= 1) ? 1 : $page - 1;
//       $next = ($page >= $pagecount) ? $pagecount : $page + 1;
//       $str_click = <<<END
//         <a href="{$uri}?page=1">首页</a>
//         <a href="{$uri}?page={$prev}">上一页</a>
//         <a href="{$uri}?page={$next}">下一页</a>
//         <a href="{$uri}?page={$pagecount}">末页</a>
// END;
//       //按照页码分页字符串
//       $str_number = '';
//       for($i = 1;$i <= $pagecount;$i++){
//         $str_number .= "<a href='{$uri}?page={$i}'>{$i}</a> ";
//       }
//       //下拉框分页字符串：利用js的onchang事件来改变当前脚本的href
//       $str_select = "<select onchange=\"location.href='{$uri}?page='+this.value\">";
//       //将所有的页码放入到option
//       for($i = 1;$i <= $pagecount;$i++){
//         if($i == $page)
//           $str_select .= "<option value='{$i}' selected='selected'>{$i}</option>";
//         else
//           $str_select .= "<option value='{$i}'>{$i}</option>";
//       }
//       $str_select .= "</select>";
//       //返回值
//       return $str_info . $str_click . $str_number . $str_select;
//     }
// }
// select * from product where name='df' order by id desc limit 0,10
// $p =1   30条  10  3页    31    10       $p=2
/*
  $pageshow 当前页码数    5   11


**/
function PageList($table,$p,$pagesize=5,$totail,$filed='*',$order='',$where=''){
  global $mysqli;
    
  $pagenum = ceil($totail/$pagesize); //向上取 3.1 4 ceil floor
  $p<0 ? $p=1: $p;
  $p>$pagenum ? $p=$pagenum : $p;

  $startpage = ($p-1)*$pagesize;


  $sql = "select $filed from $table";

  $sql .= $where == ''? '':  " where $where";
  $sql .= $order == ''? '':  " order by $order";

  $sql .= " limit $startpage,$pagesize";
    // var_dump($sql);die;
    $res = select_list($mysqli,$sql);
    // var_dump($res);die;
    return isset($res) ? $res : null;
}


function PageCode($table,$p,$totail,$pagesize,$pageshow,$url){
    
    global $mysqli;
    
    $pagenum = ceil($totail/$pagesize); //向上取 3.1 4 ceil floor
    // echo $pagenum;

    $page = '';
    $prev = '';
    $next = '';
    // $start = 1 ;

    $prev  =  $p < 1 ? 1 : $p-1 ;
    if($p == 1){
      $page .= '<li><a>上一页</a></li>';
    }else{
      $page .= '<li><a href="'.$url.'&page='.$prev.'">上一页</a></li>';
    }
  
    $offset = floor($pageshow/2); // 5/2   当前页中间 


    //以下为本帅对页码实现 。。。 的理解
    // $page=当前页。$show=展示的页数。 $all = 总页数。 $mid = 中间页 (等于floor($show/2))。 
    // 中间页，即为偏移量，向下取整有利于当总页数为偶数页时的判断。
    // if($show<$all){                  //分为两种大情况，判断显示的页数是否小于总页数。
    //     if($page>$mid){              //将整个页码分成2段，即小于偏移量时判断和大于的时候。
    //       if($page >$all-$mid){      //这里的判断是当显示出的页码的最后一页是总页数的时候为了不再生成后面的页数时做的处理。
    //         $start = $all-$show + 1; //举个例子： 5 6 7 8 9 当总页数为9时，我们拿总页数减去展示的页数，得到的是没显示的页数吧，
    //                                  //就是4，再+1 即是5了吧，所以我们就可以拿到首页了。
    //         $end = $all;             //末页就是总页数了。就不会生成多的页数了。
    //       }else{                     //实现。。。 的中间部分。
    //         $start=$page - $mid ;    //3 4 5 6 7  当前页为5 起始页为3 这样来的 -> 当前页减去偏移量
    //         $end = $page + $mid ;    //同上，即加上偏移量
    //       }
    //     }elseif($page<=$mid){        //这里是处理当前页小于偏移量时不让他乱来。
    //         $start = 1 ;             
    //         $end = $show ; 
    //     }
    // }else{
    //   $start = 1;
    //   $end = $all;  (如果你要展示的页数大于总页数的话，就不应该了吧，所以就设置首页为第一页，末页为总页数)
    // }

    //     //$p为前台页码。
    //     $p .= $page>$mid+1 ? '<li class="action">...</li>'
    //     for($i=$start;$i<=$end;$i++){
    //       if($i=$page){
    //         $page .= '<li class="hidden-xs"><a>'.$i.'</a></li>';
    //       }else{
    //         $page .= '<li class="hidden-xs"><a href="'.$url.'&page='.$i.'">'.$i.'</a></li>';
    //       }
    //     }       

    

    if($pageshow<$pagenum){  // 8  5   1 2 3 4 5   2 3 4 5 6  3 4 5 6 7  4 5 6 7 8 没有第八页           
         if($p>$offset){
              if($p > $pagenum-$offset){
                $start  = $pagenum - $pageshow +1 ; //11-5+1
                $end_page = $pagenum;
              }else{
                $start = $p-$offset;
                $end_page = $p + $offset;
              }
         }elseif($p<=$offset){
              $start = 1;
              $end_page = $pageshow;
         }
    }else{
      $start = 1;
      $end_page =$pagenum;
    }
    $page .= $p>$offset+1 && $pagenum>$pageshow? '<li><a>...</a></li>':'';
    // echo $p.$pageshow;
  for($i=$start;$i<=$end_page;$i++){
        if($i == $p){
          $page .= '<li class="on"><a>'.$i.'</a></li>';
        }else{
          $page .= '<li ><a href="'.$url.'&page='.$i.'">'.$i.'</a></li>';
        }
  }
  
    // $page .= '<li><form> 跳：<input type="text" />&emsp;页</form></li><li class="action"><a href="#">跳转</a></li>';

   $page .= $p<$pagenum-$offset && $pageshow<$pagenum? '<li class="action"><a>...</a></li>':'';

   $next  =  $next > $pagenum ? $pagenum : $p+1 ;
   if($p == $pagenum){
      $page .= '<li><a>下一页</a></li>';
   }else{
      $page .= '<li><a href="'.$url.'&page='.$next.'">下一页</a></li>';
   }

   return $page;

}