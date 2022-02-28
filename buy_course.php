<?php
    include 'header.php';
    $GLOBALS['off'] = 999;
?>
<?php
    switch ($_POST["course_name"]) {
        case "cp":
            $GLOBALS['name'] = "C Programming";
            $GLOBALS['price'] = 1549;
            break;
        case "cpp":
            $GLOBALS['name'] = "C++ Programming";
            $GLOBALS['price'] = 2249;
            break;
        case "java":
            $GLOBALS['name'] = "Java Programming";
            $GLOBALS['price'] = 2649;
            break;
        case "php":
            $GLOBALS['name'] = "PHP";
            $GLOBALS['price'] = 1949;
            break;
        case "py":
            $GLOBALS['name'] = "Python";
            $GLOBALS['price'] = 2249;
            break;
        case "webdev":
            $GLOBALS['name'] = "Web Development";
            $GLOBALS['price'] = 2949;
            break;
        case "js":
            $GLOBALS['name'] = "Java Script";
            $GLOBALS['price'] = 1949;
            break;
        case "dsa":
            $GLOBALS['name'] = "DSA with C++";
            $GLOBALS['price'] = 1949;
            break;
        case "boot":
            $GLOBALS['name'] = "Bootstrap";
            $GLOBALS['price'] = 1499;
            break;
        default:
            echo "Select a Course first !!";
    }
?>
<!--search overlay end-->
<section class="about-section section-padding about-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <span class="subheading"> What we cover in this course</span><br>
                <span>C - Overview, Program Structure, Basic Syntax, Data Types, Variables, Constants, Storage Classes, Operators, Decision Making, Loops, Functions, Scope Rules, Arrays,Pointers, Strings, Structures, Unions, Bit Fields, Typedef, Input & Output, File I/O, Preprocessors, Header Files, Type Casting, Error Handling, Recursion, Variable Arguments, Memory Management, Command Line Arguments</span>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="section-heading">
                    <span class="subheading">for Coursre :</span>
                    <table>
                        <tr><td>Course Name :</td><td><h5><?php echo $name; ?></h5></td></tr>
                        <tr><td>Course Price :</td><td><h5><?php echo "".$price." &#x20B9;"; ?></h5></td></tr>
                        <tr><td>Discount :</td><td><h5><?php echo "-".$off." &#x20B9;"; ?></h5></td></tr>
                        <tr><td>Total :</td><td><h5><?php $total = $price - $off; echo "".$total." &#x20B9;"; ?></h5></td></tr>
                    </table>
                </div>

                <p></p>
                <form>
                    <input type="text" name="mail_id" placeholder="example@email.com" value="" style="display:none;">
                    <input type="submit" value=" Pay ">
                </form>
            </div>
        </div>
    </div>
</section>
<?php
    include 'footer.php';
?>