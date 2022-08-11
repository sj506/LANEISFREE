<div class="num">
                <?php
                    for($i=1; $i<=$paging_count; $i++) { ?>
                    <span class="<?=$i===$page ? "pageSelected" : ""?>">
                        <a href="list.php?page=<?=$i?>"><?=$i?></a>
                    </span>
                <?php } ?>
            </div>
        <?php
            $page =1; 
    if(isset($_GET["page"]))
    { 
        $page = intval($_GET["page"]); //intval = 문자열을 정수형으로 변환함수 
    }
    if(isset($_SESSION['login_user']))
    {
        $login_user = $_SESSION['login_user'];
        $nm = $login_user['nm'];
    }
    $row_count = 20;
    $param =[
        "row_count" => $row_count,
        "start_idx" => ($page - 1) * $row_count
    ];
    
    $paging_count = sel_paging_count($param);
    $list = sel_board_list($param); // sel_board_list 결과값이 $list에 담김 
    ?>
    <?php
    function sel_paging_count(&$param)
    {
        // $row_count = $param["row_count"];
        $sql = "SELECT CEIL(COUNT(i_board) / {$param["row_count"]}) as cnt 
                FROM t_board";// count(= 그룹함수) = t_board에서 1줄만 나옴 
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        $row = mysqli_fetch_assoc($result);
        return $row["cnt"];//정수 넘어감 
    }
    //페이징  
    function sel_board_list(&$param) { //() 빈칸은 외부에서로부터 값을 안받는다 
        $start_idx = $param["start_idx"];
        $row_count = $param["row_count"];
        $sql = "SELECT A.i_board, A.title, A.created_at
                     , B.nm, B.i_user, B.profile_img
                  FROM t_board A
            INNER JOIN t_user B
                    ON A.i_user = B.i_user
                    ORDER BY A.i_board desc
                    LIMIT {$param["start_idx"]}, {$param["row_count"]}"; //시작 index값과 몇개 
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }?>