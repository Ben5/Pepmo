<html>

<head>

<?php echo $headVarString; ?>

<style type='text/css'>

    div.header {
        font-size: 4em;
        color: #0000CC;
    }

    div.header span.name {
        font-family: sans-serif;
    }

    div.header span.online {
        font-family: monospace;
    }

    div.outerContainer {
        width: 100%;
    }

    div.sidebar {
        float:left;
        width: 140px;
        height: 100%;
        border-right: 2px solid #666666;
    }

    div.sidebar div.title {
        text-align: center;
    }

    div.navItem {
        text-align: center;
        padding: 4px;
    }

</style>

</head>

<body>

<div class='header'>
    <span class='name'>bensmith</span><span class='online'>-online</span>
</div>

<hr />
<div class='outerContainer'> <!-- close this in the default footer! -->

    <div class='sidebar'>
        <div class='title'>
            <h3>Navigation</h3>
        </div>
        <div class='navItem'><a href='/html/home/Index'>Projects</a></div>
        <div class='navItem'><a href='/html/about/Index'>About Me</a></div>
    </div>
