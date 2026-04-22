<?php

// 🔐 secret key للحماية
$secret = "my_secret_123";

// تأكد من المفتاح
if (!isset($_GET['key']) || $_GET['key'] !== $secret) {
    http_response_code(403);
    exit("Forbidden");
}

// مسار المشروع
$repoPath = "/home/creagkaf/public_html/designPattern";

// تنفيذ git pull
$output = shell_exec("cd $repoPath && git reset --hard && git pull origin main 2>&1");

echo "<pre>$output</pre>";
