<?php

$custom = getenv('CUSTOM_ENV') ?: 'default';
$custom = htmlspecialchars($custom, ENT_QUOTES, 'UTF-8');

echo "
<h1>Azure Container Apps Test for SwapnTech DevOps</h1>

<p>Environment: Sandbox</p>
<p>Deployment: {$custom}</p>

<ul>
    <li><a href='/about.php'>About</a></li>
    <li><a href='/health.php'>Health</a></li>
</ul>
";