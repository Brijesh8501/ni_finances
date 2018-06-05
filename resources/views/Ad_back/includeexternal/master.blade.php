<html>
<head>
    <title></title>
    @stack('uppercontent')
</head>
<body>
<div class="topnavbrij" id="myTopnavbrij">
    <a href="#home" class="activebrij">Home</a>
    <a href="#news">News</a>
    <a href="#contact">Contact</a>
    <div class="dropdownbrij">
        <button class="dropbtnbrij">Dropdown
            <i class="brij-down-arrow"></i>
        </button>
        <div class="dropdown-contentbrij">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>
    </div>
    <a href="companylist">Company</a>
    <a href="javascript:void(0);" class="iconbrij" onclick="myMenuFunctionBrij()">&#9776;</a>
</div>
<div class="content">
    <div class="content-inside">
        @yield('formcontent')
    </div>
</div>
<footer class="footer">brijesh ahir@</footer>
@stack('lowercontent')
</body>
</html>