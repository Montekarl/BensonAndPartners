<style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
        margin-bottom: 0;
        border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}

    /* Set gray background color and 100% height */
    .sidenav {
        padding-top: 30px;
        height: 100%;
    }

    #detailed-SideBar{
        top: 159px;
        right: 0;
        position: fixed;
        z-index: 200;
        padding-top: 30px;
        background-color: blanchedalmond;
        height: 82%;
        width: 34%;
        overflow:scroll;
    }

    /* Set black background color, white text and some padding */
    footer {
        background-color: #555;
        color: white;
        padding: 15px;
    }

    #glyphs{
        width: 50px;
        height: 50px;
        margin-top: 15px;
        margin-left: 5px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
        .sidenav {
            height: auto;
            padding: 15px;
        }
        .row.content {height:auto;}
    }

    .hover-content {
        display:none;
    }
    #parent:hover #hover-content {
        display:block;
    }

    pre {
        white-space: pre-wrap;
    }
</style>
