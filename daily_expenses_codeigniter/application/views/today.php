<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Site Metas -->
        <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
    <title>Dashboard</title>
    <style>
        :root {
            --for-heading: #3b026b;
            --main-color: linear-gradient(45deg, #c40051, #ff0066);
            --color-dark: #1d2231;
            --text-grey: #8390a2;
            --dark-BG: #001623;
            --content-BG: #022d47;
            --dark-text: #b200ff;
            --off-white: #f1f5f9;
            --icon-color: #520293;
            --purple: linear-gradient(45deg, #99013e, #7f02ed);
            --pink: linear-gradient(45deg, #770233, #ff0066);
            --orange: linear-gradient(45deg, #ff9000, #ffd400);
            --moon: linear-gradient(45deg, #ff9000, #7f02ed);
            --moon-only: linear-gradient(45deg, #fff, #7f02ed);
            --sun: linear-gradient(45deg, #ffc700, #8300ff);
            --transition: all 400ms;
            --new-content: rgba(255, 255, 255, .5);
            --indicator: rgba(255, 255, 255, .7)
        }

        * {
            padding: 0;
            margin: 0;
            font-family: 'Rajdhani', sans-serif;
            box-sizing: border-box;
            outline: none;
            user-select: none;
            list-style-type: none;
            text-decoration: none;
            transition: all 400ms;
            overflow-x: hidden;
        }

        /* ===================== */
        @import url('https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&display=swap');

        body {
            background: rgba(0, 0, 0, .1);
            /* background: url(https://image.freepik.com/free-vector/abstract-gradient-shapes-background_79603-156.jpg); */
            backdrop-filter: blur(10px);

        }

        .main-wrapper {
            background: rgba(0, 0, 0, .1);
            backdrop-filter: blur(6px);
        }

        .user-wrapper b {
            filter: brightness(150%);
        }

        .video-1,
        .video-2 {
            z-index: -999;
            position: fixed;
            width: fit-content;
            height: 100%;
            top: 0;
        }

        .video-2 {
            visibility: hidden;
        }

        .light .video-2 {
            visibility: visible;
        }

        .light .video-1 {
            display: none;
        }

        .search {
            position: relative;
            width: 40px;
            height: 60px;
            border-radius: 30px;
            transition: var(--transition);
            box-shadow: 0 0 0 5px rgba(183, 204, 235, 0.378);
            overflow: hidden;
        }

        .search:hover,
        .search:active,
        .search:focus {
            width: 400px;
        }

        body.light .search.active {
            width: 350px;
        }

        .search .icon {
            position: relative;
            top: 0;
            left: 0;
            width: 40px;
            height: 60px;
            border-radius: 50px;
            display: flex;
            justify-content: center;
            align-items: center;

            cursor: pointer;
        }

        .search:hover .search-rotate {
            transform: rotate(100deg);
            position: absolute;

        }

        .search .icon::before {
            content: '';
            position: absolute;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            border: 3px solid var(--new-content);
            transform: translate(-4px, -4px);
        }

        .search .icon::after {
            content: '';
            position: absolute;
            width: 3px;
            height: 12px;
            background: var(--new-content);
            transform: translate(6px, 6px) rotate(315deg);
        }

        .search .input {
            position: relative;
            width: 300px;
            height: 60px;
            left: 60px;
            /* top: -100%; */
            transition: var(--transition);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .search .input input {
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            border: none;
            font: 600 1.2rem rajdhani;
            background: var(--orange);
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            background-clip: text;
            outline: none;
            padding-left: 10px;
        }

        .dis-wrap {
            position: absolute;
            top: 5rem;
            display: flex;
            justify-content: center;
            left: 55%;
            z-index: auto;
            background: #000;
            border-radius: 12px;
            padding: 10px;
            animation: fade 1s ease-in infinite;
        }

        .dis-warn {
            position: absolute;
            top: 5rem;
            display: flex;
            justify-content: center;
            left: 55%;
            z-index: auto;
            background: #000;
            border-radius: 12px;
            padding: 10px;
        }

        @keyframes fade {
            50% {
                opacity: .2;
            }
        }

        .display {
            text-transform: uppercase;
            font: 600 2rem rajdhani;
            background: linear-gradient(45deg, #cc03c9, #009dff, #00ffff);
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            background-clip: text;
        }

        .light .display {
            filter: brightness(140%);
        }

        /* ======================= */
        .light .search {
            box-shadow: 0 2px 2px 2px #e70558;
        }

        .light .search .icon::before {
            border: 3px solid #e70558;
        }

        .light .search .icon::after {
            background: var(--pink);
        }


        /* ===================== */

        .switch {
            position: absolute;
            top: 99px;
            left: calc(50% - 75px);
            max-height: 80px;
            max-width: 160px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #toggle {
            position: relative;
            display: block;
            width: 80px;
            height: 60px;
            border-radius: 50px;
            backdrop-filter: blur(6px);
            box-shadow: inset 0 5px 6px rgb(0 0 0 / 27%), inset 0 3px 6px rgb(0 0 0 / 6%), inset 0 -5px 6px rgb(0 0 0 / 21%);
            cursor: pointer;
            transition: var(--transition);
        }

        #toggle:hover {
            width: 160px;
        }

        #toggle:after {
            content: "LIGHT";
            position: absolute;
            left: 84px;
            top: 13px;
            color: #ffffff00;
            font-weight: 600;
            font-size: 29px;
        }

        #toggle:hover:after,
        #dashboard:hover,
        #kleenpulse:hover {
            text-transform: uppercase;
            background: linear-gradient(-140deg, #fff, #0ff, #ff004c, #ffcc00, #0ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: 200% 200%;
            animation: anime 6s linear infinite;
        }

        #toggle .fas.fa-moon,
        #toggle .fas.fa-sun {
            position: absolute;
            left: 27px;
            top: 21px;
            z-index: 2;
            font-size: 1.6rem;
        }

        #toggle .fas.fa-sun {
            opacity: 0;
        }

        .light #toggle .fas.fa-moon {
            opacity: 0;
        }

        .light #toggle .fas.fa-sun {
            opacity: 1;
            top: 16px;
            font-size: 1.9rem;
            background: var(--pink);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        #toggle .indicator {
            position: absolute;
            left: 0;
            top: 0;
            width: 80px;
            height: 100%;
            background: #c3c2c2;
            cursor: pointer;
            border-radius: 50%;
            transform: scale(.9);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2),
                inset 0 10px 3px var(--indicator);
        }

        #toggle:hover .indicator {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2),
                inset 0 -10px 3px var(--indicator);
        }

        #toggle .indicator:active,
        body.light #toggle .indicator:active {
            transform: scale(.7);
        }

        /* #toggle.active .indicator {
    left: calc(160px / 2);
} */

        /* DARK MODE STYLING BEGINS HERE! */

        body.light #toggle {
            background: #000b11;
            box-shadow: inset 2px 11px 5px rgb(0 0 0), inset 0 4px 13px #d20260, inset 0 4px 0px #d20260;
        }

        body.light #toggle:after {
            content: "DARK";
            position: absolute;
            left: 83px;
            top: 13px;
            font-weight: 600;
            font-size: 29px;
        }

        body.light #toggle .indicator {
            background: transparent;
            cursor: pointer;
            border-radius: 50%;
            transform: scale(.9);
            box-shadow: 0 3px 12px rgb(0 0 0), inset 0 4px 4px #d20260, inset 0 -2px 4px #d20260;
        }

        body.light #toggle:hover .indicator {
            box-shadow: 0 3px 12px rgb(0 0 0),
                inset 0 1px 1px #d20260,
                inset 0 -7px 0px #d20260;
        }

        body.light .switch {
            background: transparent;

            overflow: hidden;
            display: block;
        }



        body.light .card-single {
            box-shadow: 0 0 10px #00d9ff;
            border-radius: 10px;
        }

        body.light .card-single:hover {
            box-shadow: 0 0 0px;
        }

        body.light .card-single:hover h1 {
            color: var(--content-BG);
        }


        body.light .card-single div:last-child span {
            color: var(--dark-text);
        }

        body.light header {
            border-bottom: 1px solid rgba(6, 204, 239, 0.548);
            box-shadow: 2px 2px 5px rgba(0, 0, 0, .6);
        }

        body.light header h2 {
            color: cyan;
        }

        body.light .sidebar {

            box-shadow: 5px 0 20px rgba(0, 0, 0, .7);
            z-index: 999;
        }

        .light .sidebar li a span {
            font-size: 1.5rem;
            filter: brightness(140%);
            background: var(--orange);
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            background-clip: text;
        }

        body.light .sidebar-menu a:hover {
            background: transparent;
            color: #0ff;
            padding-top: .7rem;
            padding-bottom: 1rem;
            border-radius: 30px 0 0 30px;
            border: 1px solid #0ff;
        }

        body.light .card-single:hover {
            background: linear-gradient(45deg, #00616c, #00f7ff);
            filter: brightness(100%);
        }


        body.light .card-header {
            border-bottom: 1px solid var(--dark-text);
        }

        body.light thead tr {
            border-top: 1px solid #d20260;
            border-bottom: 1px solid #d20260;
        }

        body.light td {
            color: #fff;
        }

        body.light .contact span {
            color: var(--dark-text);
        }

        body.light .card-header button:hover {
            background: transparent;
            border: 1px solid cyan;
            color: cyan;
        }

        /* DARK MODE STYLING ENDS HERE! */


        #pop-wrap {
            display: none;
            font-size: 4vmin;
            position: fixed;
            width: auto;
            min-width: 20vw;
            height: auto;
            top: 50%;
            left: 50%;
            text-align: center;
            transform: translate(-50%, -50%);
        }

        #pop-wrap .pop-up {
            background: var(--main-color);
            -webkit-text-fill-color: transparent;
            text-fill-color: transparent;
            -webkit-background-clip: text;
            background-clip: text;
        }

        /* ===========SIDEBAR========== */
        .sidebar {
            width: 250px;
            position: fixed;
            left: 0;
            top: 0;
            height: 100%;
            background: rgba(0, 0, 0, .2);
            backdrop-filter: blur(6px);
            box-shadow: 5px 0 10px rgba(0, 0, 0, .3);
            z-index: 100;
            transition: width 300ms;
        }

        .sidebar-brand {
            /* height: 90px; */
            padding: 1rem 0rem 1rem 2rem;
            /* 	color:#fff; */
        }

        .sidebar-brand span {
            display: inline-block;
            padding-right: 1rem;
        }


        .sidebar-brand h2 span:last-child,
        .sidebar-brand h2 span:first-child {
            filter: brightness(140%);
            background: var(--pink);
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            background-clip: text;
            text-transform: uppercase;
        }

        .sidebar-menu li {
            width: 100%;
            margin-bottom: 1.7rem;
            padding-left: 1rem;
        }

        .sidebar-menu a {
            padding-left: 1rem;
            display: block;
            color: var(--off-white);
            text-transform: uppercase;
            font-weight: 500;
            font-size: 1.1rem;
            overflow: hidden;
        }

        .sidebar-menu a:hover {
            /* background: var(--off-white); */
            /* color: var(--icon-color); */
            padding-top: .7rem;
            padding-bottom: 1rem;
            border: 1px solid rgba(255, 255, 255, 0.62);
            background: rgba(0, 0, 0, .2);
            backdrop-filter: blur(6px);
            border-radius: 30px 0 0 30px;
        }

        .sidebar-menu a span:first-child {
            font-size: 1.5rem;
            padding-right: 1rem;
            transform: translatey(5px);
        }

        .sidebar-menu {
            margin-top: 1rem;

        }

        #nav-toggle:checked+.sidebar {
            width: 70px;
        }

        #nav-toggle:checked+.sidebar {
            width: 70px;
        }

        #nav-toggle:checked+.sidebar .sidebar-brand,
        #nav-toggle:checked+.sidebar li {
            padding-left: 1rem;
            text-align: center;
        }

        #nav-toggle:checked+.sidebar li a {
            padding-left: 0rem;
        }

        #nav-toggle:checked+.sidebar .sidebar-brand h2 span:last-child,
        #nav-toggle:checked+.sidebar li a span:last-child {
            display: none;
        }

        /* ===========SIDEBAR========== */

        #nav-toggle:checked~.main-content {
            margin-left: 70px;
        }

        #nav-toggle:checked~.main-content header {
            width: calc(100% - 70px);
            left: 70px;
        }

        .main-content {
            transition: margin-left 300ms;
            margin-left: 250px;
            background: rgba(0, 0, 0, .2);
        }

        /* ====GLASSMORPHISM CHANGE HERE!==== */
        header {
            /* 	background:#fff; */
            background: var(--new-BG);
            display: flex;
            justify-content: space-between;
            padding: 1rem 1.5rem;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, .2);
            position: fixed;
            left: 250px;
            width: calc(100% - 250px);
            top: 0;
            z-index: 100;
            transition: left 300ms;
        }

        #nav-toggle {
            display: none;
        }

        /* ====GLASSMORPHISM CHANGE HERE!==== */
        header h2 {
            color: #fff;
            text-transform: uppercase;
        }

        header label span {
            font-size: 1.7rem;
            padding-left: 1rem;
        }

        .search-wrapper {
            border: 1px solid #ccc;
            border-radius: 30px;
            height: 50px;
            display: flex;
            align-items: center;
            overflow-x: hidden;
        }

        .search-wrapper:focus,
        .search-wrapper:hover {
            border: 1px solid var(--icon-color);
        }

        .search-wrapper input {
            height: 100%;
            padding: .5rem;
            border: none;
            background: transparent;
        }

        input {
            color: #fff;
            font-size: 15px;
        }


        .search-wrapper span {
            display: inline-block;
            padding: 0rem 1rem;
            font-size: 1.5rem;
            color: var(--new-content);
        }

        .user-wrapper {
            display: flex;
            align-items: center;
            padding: 0 10px;
        }

        .light .user-wrapper {
            border-left: 4px solid #ea0565;
        }

        .user-wrapper img {
            border-radius: 50%;
            margin-right: 1rem;
        }

        .user-wrapper div h4 {
            color: #fff;

        }

        .user-wrapper small {
            display: inline-block;
            color: #e0e0e0;
        }

        body.light h4 {
            background: var(--orange);
            -webkit-text-fill-color: transparent;
            text-fill-color: transparent;
            -webkit-background-clip: text;
            background-clip: text;
        }

        /* ====GLASSMORPHISM CHANGE HERE!==== */
        main {
            margin-top: 83px;
            padding: 5rem 20rem 30rem 20px;
            min-height: calc(100vh - 90px);
        }

        /* ====GLASSMORPHISM CHANGE HERE!==== */
        .heading {

            color: #fff;
        }

        body.light .heading {
            filter: brightness(140%);
            background: var(--pink);
            -webkit-text-fill-color: transparent;
            text-fill-color: transparent;
            -webkit-background-clip: text;
            background-clip: text;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 1.2rem;
            margin-top: 1rem;
            padding: 10px;
            overflow: hidden;
            height: auto;
        }

        .card-single {
            display: flex;
            justify-content: space-between;
            background: rgba(0, 0, 0, .2);
            backdrop-filter: blur(16px);
            padding: 1.2rem;
            border-radius: 5px;
            box-shadow: 0 0 20px rgba(0, 0, 0, .2);
            overflow: hidden;
            filter: brightness(120%);
            transition: all 400ms;
        }

        .cards .card-single {
            height: 150px;
        }

        .card-single:hover {
            transform: scale(1.04);
            border-radius: 25px;
        }

        .card-single div:last-child span {
            font-size: 3rem;
            background: var(--pink);
            -webkit-text-fill-color: transparent;
            text-fill-color: transparent;
            -webkit-background-clip: text;
            background-clip: text;
        }


        .card-single div:first-child span {
            text-transform: uppercase;
            color: #fff;
        }

        .card-single:hover,
        .card:hover,
        .light .card {
            background: rgba(0, 0, 0, 0.564);
        }

        .light .card:hover {
            background: rgba(0, 0, 0, 0.713);
        }

        .card-single:hover h1,
        .card-single:hover div:last-child span {
            filter: brightness(140%);
        }

        .card-single:hover h1,
        .card-single:hover div:last-child span {
            filter: brightness(140%);
        }

        .recent-grid {
            margin-top: 3.5rem;
            display: grid;
            grid-gap: 2rem;
            grid-template-columns: 100%;

        }

        .card {
            /* 	background:#fff; */
            background: rgba(0, 0, 0, .2);
            backdrop-filter: blur(16px);
            border-radius: 10px;
        }

        /* =========COUNTER=========== */
        sup,
        b {
            background: var(--moon);
            -webkit-text-fill-color: transparent;
            text-fill-color: transparent;
            -webkit-background-clip: text;
            background-clip: text;
        }

        @property --num {
            syntax: "<integer>";
            initial-value: 0;
            inherits: false;
        }

        #customer,
        #project,
        #order,
        #income {
            counter-reset: num var(--num);
        }

        #customer {
            animation: customer 1s forwards ease-in;
        }

        #project {
            animation: project 5s forwards ease-in-out;
        }

        #order {
            animation: order 5s forwards ease-in-out;
        }

        #income {
            display: inline;
            animation: income 5s forwards ease-in;
        }

        #income::before,
        #customer::before,
        #project::before,
        #order::before {
            content: counter(num);
            background: var(--moon);
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            background-clip: text;
        }
        input{
color:black;
        }

        .card-single:hover #income,
        .card-single:hover #customer,
        .card-single:hover #project,
        .card-single:hover #order {
            animation-play-state: paused;
        }

        @keyframes income {
            from {
                --num: 0;
            }

            to {
                --num: 20;
            }
        }

        @keyframes customer {
            from {
                --num: 0;
            }

            to {
                --num: 1;
            }
        }

        @keyframes project {
            from {
                --num: 0;
            }

            to {
                --num: 27;
            }
        }

        @keyframes order {
            from {
                --num: 0;
            }

            to {
                --num: 10;
            }
        }

        /* =========COUNTER=========== */


        .card-header,
        .card-body {
            padding: 1rem;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid var(--dark-text);
            text-transform: uppercase;
            transition: var(--transition) !important;
        }

        .card-header .heading {
            color: var(--off-white);
        }

        .card-header button {
            background: var(--main-color);
            border-radius: 10px;
            color: var(--off-white);
            font-size: .8rem;
            padding: .5rem 1rem;
            border: 1px solid var(--main-color);
        }

        .card-header button:hover {
            background: transparent;
            color: var(--off-white);
            border: 1px solid #fff;
        }

        .card-header button:hover span {
            transform: translatex(5px);
        }

        .card-header button span {
            transform: translatey(2px);
        }

        table {

            border-collapse: collapse;
        }

        thead tr {
            border-top: 1px solid var(--new-content);
            border-bottom: 1px solid var(--new-content);
        }


        thead td {
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.2px;
        }

        td {
            padding: .5rem 1rem;
            font-size: 1rem;
            color: var(--off-white);
        }

        td .status {
            display: inline-block;
            height: 20px;
            width: 20px;
            border-radius: 50%;
            margin-right: 1rem;
        }

        tr td:last-child {
            display: flex;
            align-items: center;
        }

        .status.purple {
            background: var(--purple);
        }

        .status.pink {
            background: var(--pink);
        }

        .status.orange {
            background: var(--orange);
        }

        .table-responsive {
            width: 100%;
            overflow-x: auto;
        }

        .customer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: .5rem .7rem;
        }

        .info {
            display: flex;
            align-items: center;
        }

        .info img {
            border-radius: 50%;
            margin-right: 1rem;
        }

        .info h4 {
            font-size: 1rem;
            font-weight: 700;
            color: #fff;
            letter-spacing: 1px;
        }

        .info small {
            font-weight: 600;
            color: var(--text-grey);
        }

        .contact span {
            font-size: 1.2rem;
            display: inline-block;
            margin-left: .5rem;
            background: var(--pink);
            -webkit-text-fill-color: transparent;
            text-fill-color: transparent;
            -webkit-background-clip: text;
            background-clip: text;
        }

        @keyframes anime {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        @media only screen and (max-width: 1200px) {
            .sidebar {
                width: 70px;
            }

            .sidebar {
                width: 70px;
            }

            .sidebar .sidebar-brand,
            .sidebar li {
                padding-left: 1rem;
                text-align: center;

            }

            .sidebar li a {
                margin-bottom: 2rem !important;
            }

            .sidebar li a {
                padding-left: 0rem;

            }

            .light .sidebar li a span {
                font-size: 2rem;
                background: var(--pink);
                -webkit-text-fill-color: transparent;
                text-fill-color: transparent;
                -webkit-background-clip: text;
                background-clip: text;
            }

            .light .sidebar:hover li a span {
                font-size: 1.5rem;
                filter: brightness(140%);
                background: var(--orange);
                -webkit-text-fill-color: transparent;
                -webkit-background-clip: text;
                background-clip: text;
            }

            .sidebar .sidebar-brand h2 span:last-child,
            .sidebar li a span:last-child {
                display: none;
            }

            .main-content {
                margin-left: 70px;
            }

            .main-content header {
                width: calc(100% - 70px);
                left: 70px;
            }

            .sidebar {
                width: 70px;
            }

            .sidebar:hover {
                width: 345px;
                z-index: 200;
                background: rgba(0, 0, 0, .2);
                backdrop-filter: blur(6px);
                box-shadow: 0 0 10px rgba(0, 0, 0, .4);
            }

            .sidebar:hover .sidebar-brand,
            .sidebar:hover li {
                padding-left: 2rem;
                text-align: left;
            }

            .sidebar:hover li a {
                padding-left: 1rem;
                text-transform: uppercase;
                font-weight: 500;
            }

            .sidebar:hover .sidebar-brand h2 span:last-child,
            .sidebar:hover li a span:last-child {
                display: inline;
            }

            .sidebar:hover .sidebar-brand h2 span:first-child {
                transform: translatey(5px);
            }
        }

        @media only screen and (max-width:1050px) {
            .cards {
                grid-template-columns: repeat(2, 1fr);
            }

            .recent-grid {
                grid-template-columns: 1fr;
            }

            .dis-wrap,
            .dis-warn {
                top: 5.3rem;
                left: 50%;
            }

            .display {
                font: 600 1.5rem rajdhani;
            }

        }

        @media only screen and (max-width:768px) {
            .cards {
                grid-template-columns: 1fr;
            }

            .cards .card-single {
                height: 150px;
            }

            .recent-grid {
                grid-template-columns: 100%;
            }

            .search {
                display: none;
            }

            .sidebar {
                left: -100% !important;
                margin-top: 4.5em;
                height: 95.7%;
                transition: all 400ms;
            }

            header h2 {
                display: flex;
                align-items: center;
                justify-content: flex-start;
                margin-left: 2rem;
            }

            header label {
                border: 1px solid var(--off-white);
                display: flex;
                padding-right: 0rem;
                margin-right: 1rem;
                height: 40px;
                width: 40px;
                border-radius: 50%;
                color: #fff;
                align-items: center;
                justify-content: center !important;
                position: fixed;
                left: 10px;
            }

            .light header label {
                color: #f00170;
                border: 1px solid #00ffff;
            }

            header label span {
                text-align: center;
                padding: 0rem;
            }

            header label:checked span::before {
                display: none;
            }

            .main-content {
                width: 100%;
                margin-left: 0;
            }

            header {
                width: 100% !important;
                left: 0 !important;
            }

            #nav-toggle:checked+.sidebar {
                left: 0 !important;
                z-index: 100;
                width: 50%;
                transition: var(--transition);
            }

            #nav-toggle:checked+.sidebar .sidebar-brand,
            #nav-toggle:checked+.sidebar li {
                padding-left: 2rem;
                text-align: left;
                transition: var(--transition);
            }

            #nav-toggle:checked+.sidebar li a {
                padding-left: 1rem;
            }

            #nav-toggle:checked+.sidebar .sidebar-brand h2 span:last-child,
            #nav-toggle:checked+.sidebar li a span:last-child {
                display: inline;
            }

            #nav-toggle:checked~.main-content {
                margin-left: 0 !important;
            }

            header {
                margin-bottom: 0;
            }
        }

        @media only screen and (min-width:768px) {
            header label {
                display: none !important;
            }
        }


        .footer {
            --trans: all 400ms;
            width: calc(100% - 345px);
            transition: var(--trans);
            position: absolute;
            bottom: 0;
        }

        @media (max-width: 1200px) {
            .footer {
                width: calc(100% - 45px);

            }
        }

        .footer .word {
            text-transform: uppercase;
            font-family: rajdhani;
            color: #fff;
            font-weight: 900;
            text-align: center;
        }

        @media (min-width: 1000px) {
            .footer {
                transition: var(--trans);
                font-size: 3rem;

            }
        }

        @media (max-width: 1000px) {
            .footer {
                font-size: 2rem;

            }
        }

        @media (max-width: 500px) {
            .footer {
                font-size: 8vw;
            }
        }

        .fa-heart {
            color: #920121;
            animation: pulse 1s linear infinite !important;
        }

        @keyframes pulse {
            50% {
                transform: scale(0.8);
                color: red;
            }
        }


        body.light footer p {
            background: linear-gradient(196deg, #0ff, #ff004c);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font: 600 2rem teko;
            text-transform: uppercase;
        }


        @media only screen and (max-width:560px) {

            main {
                padding-left: 10px;
                padding-right: 10px;
                margin-top: 64px;
            }

            .recent-grid {
                padding: 0;
            }

            header {
                padding: 10px 15px;
            }

            #nav-toggle:checked+.sidebar {
                left: 0 !important;
                width: 300px;
                z-index: 200;
                background: var(--main-color);
                box-shadow: 0 0 10px rgba(0, 0, 0, .4);
            }

            .sidebar-menu a:active {
                background: #fff;
                color: var(--icon-color);
                padding-top: 1rem;
                padding-bottom: 1rem;
                border-radius: 30px 0 0 30px;
            }

            body.light .switch {
                top: 80px;
            }
        }

        ::-webkit-scrollbar {
            width: 5px !important;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--main-color);
            border-radius: 10px;
        }

        body.light ::-webkit-scrollbar {
            background-color: var(--dark-BG);
            width: 8px;
        }

        body.light ::-webkit-scrollbar-thumb {
            background: #13001a;
            border-radius: 10px;
        }

        /*----------dropdown start--------*/
        .dropdown {
    list-style-type: none;
    padding: 0;
}
.dropdown li {
    visibility: hidden;
    position: relative;
    z-index: 10;
    margin: 0;
    padding: 0;
    background-color: transparent;
    border-right: 1px solid #1bd6bc;
    border-left: 1px solid #1bd6bc;
    box-shadow: 0px 0px 20px -3px #1bd6bc;
    transition: 80ms;
}
.dropdown li a {
    display: block;
    /* width: 10rem;
    height: 2.5rem; */
    line-height: 2.5rem;
    padding: 0rem 1rem;
    color: white;
    text-decoration: none;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    transition: font-size 200ms, background-color 200ms;
}
.dropdown li a:active {
    font-size: 0.8em;
    background-color: rgb(27, 214, 188, 0.1);
}
.dropdown li:first-of-type {
    visibility: visible;
    border-top: 1px solid #1bd6bc;
    border-radius: 0.3rem;
    transition: background-color 200ms;
}
.dropdown li:last-of-type {
    border-bottom: 1px solid #1bd6bc;
    border-bottom-left-radius: 0.3rem;
    border-bottom-right-radius: 0.3rem;
}
.dropdown:hover li {
    visibility: visible;
}
.dropdown:hover li:first-of-type {
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    background-color: transparent;
    z-index: 15;
    font-weight: 600;
}
.dropdown li:hover {
    background-color: transparent;
    z-index: 15;
}
.dropdown li:hover a {
    color: black;
}
/*-----------dropdown end--------*/
    </style>
    <script>

        let welcome;
        let date = new Date();
        let hour = date.getHours();
        let minute = date.getMinutes();
        let second = date.getSeconds();
        if (minute < 10) {
            minute = "0" + minute;
        }
        if (second < 10) {
            second = "0" + second;
        }
        if (hour < 12) {
            welcome = "morning";
        } else if (hour < 17) {
            welcome = "afternoon";
        } else {
            welcome = "evening";
        }

        function display(val) {
            if (event.key === 'Enter') {
                if ((val.value).length > 0) {
                    console.log(val.value)
                    customAlert(`searching for: "${val.value}"`, 3500)
                } else {
                    customWarn('Type something', 1500)
                }
            }
        }


        $(document).ready(function () {
            const body = document.querySelector('body');
            const toggled = document.getElementById('toggle');
            const media = window.matchMedia("(min-width:700px)")

            toggled.onclick = function () {
                body.classList.toggle('light');
                toggled.classList.toggle('active')
            }
            if (media.matches) {
                console.log(true)
                $('#dashboard').mouseenter(function () {
                    this.innerHTML = `good
    ${welcome}`;
                });
                $('#dashboard').mouseleave(function () {
                    this.innerHTML = "DASHBOARD";
                });
                $('#kleenpulse').mouseenter(function () {
                    this.innerHTML = "welcome";
                });
                $('#kleenpulse').mouseleave(function () {
                    this.innerHTML = "Shruti Meshram";
                });
            } else {
                console.log(false)
            }



        })

        function customAlert(msg, duration) {
            var styler = document.createElement("div");
            styler.className = 'dis-wrap'

            styler.innerHTML = "<h1 class='display'>" + msg + "</h1>";
            setTimeout(function () {
                styler.parentNode.removeChild(styler);
            }, duration);
            document.body.appendChild(styler);
        }

        function customWarn(msg, duration) {
            var styler = document.createElement("div");
            styler.className = 'dis-warn'

            styler.innerHTML = "<h1 class='display'>" + msg + "</h1>";
            setTimeout(function () {
                styler.parentNode.removeChild(styler);
            }, duration);
            document.body.appendChild(styler);
        }

    </script>

</head>

<body>
<?php 
  if($this->session->flashdata('success')){
    echo $this->session->flashdata('success');
  }

  if($this->session->flashdata('error')){
    echo $this->session->flashdata('error');
  }
  ?>


    <input type="checkbox" id="nav-toggle">

    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><center><span><i class="fa fa-user-circle"></i></span><br><span id="kleenpulse">Shruti Meshram</span></center></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="<?php echo site_url('Expense/add');?>" class="active"><span class="fas fa-cubes"></span>
                        <span>Add Expenses</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Expense/manage');?>" class="active"><span class="fas fa-cubes"></span>
                        <span>Manage</span>
                    </a>
                </li>
                <li>
                    <span>

                        <ul class="dropdown">
                        <li><a href="#">Expense</a></li>
                            <li><a href="<?php echo site_url('Report/today');?>">Today's</a></li>
                            <li><a href="<?php echo site_url('Report/month');?>">Monthly</a></li>
                            <li><a href="<?php echo site_url('Report/year');?>">Yearly</a></li>
                        </ul>
                    </span>
                </li>
                
                <li>
                    <a href="<?php echo site_url('Profile');?>"><span class="fa fa-user-circle"></span>
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Change_password');?>"><span class="fas fa-clipboard"></span>
                        <span>Change Pass</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-wrapper">
        <div class="main-content">
            <header>
                <h2 class="heading" id="dashboard">
                    Dashboard
                </h2>
                <label for="nav-toggle">
                    <span class="fas fa-bars"></span>
                </label>

                <div class="search">
                    <div class="search-rotate">
                        <div class="icon"></div>
                    </div>
                    <div class="input">
                        <input type="text" placeholder="search" id="mysearch" autocomplete="off"
                            onkeydown="display(this)">
                    </div>
                </div>

                <div class="user-wrapper">
                <span class="fa fa-user-circle fa-2x " style="color:white;"></span>&nbsp;
                    <div>
                        <h4>Logout</h4>
                        <b></b></small>
                    </div>
                </div>
            </header>
            <main>
                <!-- <div id="pop-wrap">
                        <h1 class="pop-up">Light Mode Activated</h1>
                    </div> -->
                <div class="switch" id="switch">
                    <div id="toggle">
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                        <i class="indicator"></i>

                    </div>
                </div>
                    <?php echo form_open('Report/today'); ?>
                <input type="date" name="fdate">
                <input type="date" name="tdate">
                <input type="submit" name="submit">
                <?php echo form_close(); ?>
                    
                    
            
                <div class="recent-grid">
   
                    <div class="customers">
                        <div class="card">
                            <div class="card-header">
                            <img src="../image/111.jpg" width="100%">  
                            </div>
                        </div>
                    </div>
                </div>

            </main>
            
        </div>
    </div>
    <video class="video-1" src="https://res.cloudinary.com/liquidtime/video/upload/v1655385934/abstract_fihenv.mp4" loop
        muted autoplay  width="100%"></video>
    <video class="video-2" src="https://res.cloudinary.com/liquidtime/video/upload/v1655385877/dark_wave_irg2pp.mp4"
        loop muted autoplay  width="100%"></video>
    <!-- <div class="dis-wrap" >
                <p class="display">[Some text here for refrence]</p>
            </div> -->

</body>

</html>
