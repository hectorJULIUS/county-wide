<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    
    nav {
        background-color: #333;
        color: #fff;
        padding: 18px;
    }
    
    nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
    }
    
    nav ul li {
        display: inline-block;
        margin-right: 10px;
    }
    
    nav ul li a {
        color: #fff;
        text-decoration: none;
        padding: 10px 15px;
        font: weight 10px;
    }
    
    nav ul li a:hover {
        background-color: #555;
        opacity: 0.8;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        nav {
            padding: 18px 0;
        }
        
        .menu-toggle {
            display: block;
            text-align: right;
            cursor: pointer;
            padding: 10px 15px;
            color: #fff;
            font-weight: bold;
            font-size: 14px;
            background-color: #333;
            border: none;
        }
        
        .menu-toggle:hover {
            background-color: #555;
        }
        
        nav ul {
            display: none;
            flex-direction: column;
            text-align: center;
        }
        
        nav ul li {
            margin-right: 0;
            margin-bottom: 10px;
        }
        
        nav ul li:last-child {
            margin-bottom: 0;
        }
        
        nav ul li a {
            padding: 10px;
        }
        
        .menu-open {
            display: block;
        }
    }
</style>
<nav>
    <div class="menu-toggle">&#9776;</div>
    <ul>
        <li>
            <a href="/">Home</a>
            <a href="/about">About Us</a>
            <a href="/services">Services</a>
            <a href="/contact">Contact Us</a>
            <a href="/login">Login</a>
            <a href="/signup">Signup</a>
        </li>
    </ul>
</nav>

<script>
    document.querySelector('.menu-toggle').addEventListener('click', function() {
        var nav = document.querySelector('nav ul');
        nav.style.display = nav.style.display === 'none' ? 'block' : 'none';
    });
</script>
