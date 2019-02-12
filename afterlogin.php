<?php
require_once("config.php");

$username = $_POST['username'];
$password = $_POST['password'];
$fetchthisrecord = fetchThisUser($username);

foreach ($fetchthisrecord as $userdetails)
{
        $userdetails['role'];

}
if($userdetails["role"] == 'professor' )
{
?>

<body bgcolor="#00ced1"></body>
    <div class="navPaletteContent">
        <h2 class="hideoff" tabindex="-1">Course Menu:</h2>
            <div id="courseMenuPalette_paletteTitleHeading">
                <div class="navPaletteTitle">
                    <h3 aria-expanded="true">
                        <!--<a href="#" class="comboLink" title="Collapse Database Design & Dev of Web FALL 2017 73303 (IS-667-73303.201770)" id="courseMenu_link">Database Design & Dev of Web FALL 2017 73303 (IS-667-73303.201770)</a>-->
                        <span title = "Database Design & Dev of Web FALL 2017 73303 (IS-667-73303.201770)">Database Design & Dev of Web FALL 2017 73303 (IS-667-73303.201770)</span>
                    </h3>
                    <h3>
                        <!--<a href="/webapps/blackboard/execute/courseMain?course_id=_164127_1" target="" class="submenuLink" id="courseMenu_combo" title="Go to Course Entry Page">
                            <img src="/images/ci/icons/generic_dbl_arrow_right.gif" alt="Course Entry Page">-->
                            <span title="Course Entry Page">Course Entry <Page></Page></span>
                        </a>
                    </h3>
                </div>
            </div>
            <ul id="courseMenuPalette_contents" class="courseMenu">
                <li id="paletteItem:_1806460_1" class="clearfix ">
                    <!--<a href="/webapps/blackboard/content/launchLink.jsp?course_id=_164127_1&tool_id=_132_1&tool_type=TOOL&mode=view&mode=reset" target="_self">-->
                        <span title="Announcements">Announcements</span>
                    </a>
                </li>
                <li id="paletteItem:_1806461_1" class="clearfix ">
                    <!--<a href="/webapps/blackboard/content/launchLink.jsp?course_id=_164127_1&tool_id=_180_1&tool_type=TOOL&mode=view&mode=reset" target="_self">-->
                        <span title="Faculty Information">Faculty Information</span>
                    </a>
                </li>
                <li id="paletteItem:_1806464_1" class="clearfix ">
                    <!--<a href="/webapps/blackboard/content/listContent.jsp?course_id=_164127_1&content_id=_3217602_1&mode=reset" target="_self">-->
                        <span title="Syllabus">Syllabus</span>
                    </a>
                </li>
                <li id="paletteItem:_1806467_1" class="clearfix divider">
                    <hr>
                </li>
                <li id="paletteItem:_1806462_1" class="clearfix ">
                    <!--<a href="/webapps/blackboard/content/listContent.jsp?course_id=_164127_1&content_id=_3217601_1&mode=reset" target="_self">-->
                        <span title="Assignments">Assignments</span>
                    </a>
                </li>
                <li id="paletteItem:_1806458_1" class="clearfix ">
                    <!--<a href="/webapps/blackboard/content/launchLink.jsp?course_id=_164127_1&tool_id=_137_1&tool_type=TOOL&mode=view&mode=reset" target="_self">-->
                        <span title="Discussion Board">Discussion Board</span>
                    </a>
                </li>
                <li id="paletteItem:_1806468_1" class="clearfix divider">
                    <hr>
                </li>
                <li id="paletteItem:_1806463_1" class="clearfix ">
                    <!--<a href="/webapps/blackboard/content/launchLink.jsp?course_id=_164127_1&tool_id=_195_1&tool_type=TOOL&mode=view&mode=reset" target="_self">-->
                        <span title="My Grades">My Grades</span>
                    </a>
                </li>
                <li id="paletteItem:_1806469_1" class="clearfix ">
                    <!--<a href="/webapps/blackboard/content/launchLink.jsp?course_id=_164127_1&tool_id=_133_1&tool_type=TOOL&mode=view&mode=reset" target="_self">-->
                        <span title="Email">Email</span>
                    </a>
                </li>
                <li id="paletteItem:_1806459_1" class="clearfix ">
                    <!--<a href="/webapps/blackboard/content/launchLink.jsp?course_id=_164127_1&tool_id=_11_1&tool_type=TOOL&mode=view&mode=reset" target="_self">-->
                        <span title="Tools">Tools</span>
                    </a>
                </li>
                <li id="paletteItem:_1806466_1" class="clearfix ">
                    <!--<a href="http://www.pace.edu/its/teaching-and-learning/digital-toolkit/blackboard" target="_blank">-->
                        <span title="Blackboard Help">Blackboard Help</span>
                    </a>
                </li>
                <li id="paletteItem:_1806466_1" class="clearfix "><a href="professor-poll.php">
                        <span title="Feedback">Poll Options</span>
                    </a>
                </li>
            </ul>
    </div>


<?php
}

else
{
?>

<body bgcolor="#00ced1"></body>
<div class="navPaletteContent">
    <h2 class="hideoff" tabindex="-1">Course Menu:</h2>
    <div id="courseMenuPalette_paletteTitleHeading">
        <div class="navPaletteTitle">
            <h3 aria-expanded="true">
                <!--<a href="#" class="comboLink" title="Collapse Database Design & Dev of Web FALL 2017 73303 (IS-667-73303.201770)" id="courseMenu_link">Database Design & Dev of Web FALL 2017 73303 (IS-667-73303.201770)</a>-->
                <span title = "Database Design & Dev of Web FALL 2017 73303 (IS-667-73303.201770)">Database Design & Dev of Web FALL 2017 73303 (IS-667-73303.201770)</span>
            </h3>
            <h3>
                <!--<a href="/webapps/blackboard/execute/courseMain?course_id=_164127_1" target="" class="submenuLink" id="courseMenu_combo" title="Go to Course Entry Page">
                    <img src="/images/ci/icons/generic_dbl_arrow_right.gif" alt="Course Entry Page">-->
                <span title="Course Entry Page">Course Entry <Page></Page></span>
                </a>
            </h3>
        </div>
    </div>
    <ul id="courseMenuPalette_contents" class="courseMenu">
        <li id="paletteItem:_1806460_1" class="clearfix ">
            <!--<a href="/webapps/blackboard/content/launchLink.jsp?course_id=_164127_1&tool_id=_132_1&tool_type=TOOL&mode=view&mode=reset" target="_self">-->
            <span title="Announcements">Announcements</span>
            </a>
        </li>
        <li id="paletteItem:_1806461_1" class="clearfix ">
            <!--<a href="/webapps/blackboard/content/launchLink.jsp?course_id=_164127_1&tool_id=_180_1&tool_type=TOOL&mode=view&mode=reset" target="_self">-->
            <span title="Faculty Information">Faculty Information</span>
            </a>
        </li>
        <li id="paletteItem:_1806464_1" class="clearfix ">
            <!--<a href="/webapps/blackboard/content/listContent.jsp?course_id=_164127_1&content_id=_3217602_1&mode=reset" target="_self">-->
            <span title="Syllabus">Syllabus</span>
            </a>
        </li>
        <li id="paletteItem:_1806467_1" class="clearfix divider">
            <hr>
        </li>
        <li id="paletteItem:_1806462_1" class="clearfix ">
            <!--<a href="/webapps/blackboard/content/listContent.jsp?course_id=_164127_1&content_id=_3217601_1&mode=reset" target="_self">-->
            <span title="Assignments">Assignments</span>
            </a>
        </li>
        <li id="paletteItem:_1806458_1" class="clearfix ">
            <!--<a href="/webapps/blackboard/content/launchLink.jsp?course_id=_164127_1&tool_id=_137_1&tool_type=TOOL&mode=view&mode=reset" target="_self">-->
            <span title="Discussion Board">Discussion Board</span>
            </a>
        </li>
        <li id="paletteItem:_1806468_1" class="clearfix divider">
            <hr>
        </li>
        <li id="paletteItem:_1806463_1" class="clearfix ">
            <!--<a href="/webapps/blackboard/content/launchLink.jsp?course_id=_164127_1&tool_id=_195_1&tool_type=TOOL&mode=view&mode=reset" target="_self">-->
            <span title="My Grades">My Grades</span>
            </a>
        </li>
        <li id="paletteItem:_1806469_1" class="clearfix ">
            <!--<a href="/webapps/blackboard/content/launchLink.jsp?course_id=_164127_1&tool_id=_133_1&tool_type=TOOL&mode=view&mode=reset" target="_self">-->
            <span title="Email">Email</span>
            </a>
        </li>
        <li id="paletteItem:_1806459_1" class="clearfix ">
            <!--<a href="/webapps/blackboard/content/launchLink.jsp?course_id=_164127_1&tool_id=_11_1&tool_type=TOOL&mode=view&mode=reset" target="_self">-->
            <span title="Tools">Tools</span>
            </a>
        </li>
        <li id="paletteItem:_1806466_1" class="clearfix ">
            <!--<a href="http://www.pace.edu/its/teaching-and-learning/digital-toolkit/blackboard" target="_blank">-->
            <span title="Blackboard Help">Blackboard Help</span>
            </a>
        </li>
        <li id="paletteItem:_1806466_1" class="clearfix "><a href="viewpolls.php">
        <span title="viewpolls">View Polls</span>
        </a>
        </li>
    </ul>
</div>

        <?php
}
?>

