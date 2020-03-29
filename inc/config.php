<?php
// Database config
define('DATABASE_HOST', 'localhost');	// MySQL host. usually localhost
define('DATABASE_USER', 'root');		// MySQL username
define('DATABASE_PASS', '');		// MySQL password
define('DATABASE_NAME', '');		// Database name
define('DATABASE_WHAT', 'host');		// "host" or unix socket path

// Server urls, no slash
$URL = [
	'avatar' => 'https://a.aipserver.ru',
	'server' => 'https://aipserver.ru',
	'bancho' => 'http://c.aipserver.ru',
	'scores' => 'http://127.0.0.1:5002'
];

$ChangelogConfig = [
	// If in the commit message any of these words appear, don't show the commit in the changelog.
	'forbidden_keywords' => ['[HIDE]', '[SECRET]'],
	// These commits will be hidden
	'forbidden_commits' => [],
	// Labels (keyword,label text,color)
	'labels' => ['[FIX],fix,danger', '[WEB],web,info', '[BANCHO],bancho,warning', '[SCORES],scores,primary', '[NEW],new,success'],
	// If you want to change names from what they appear in the git logs, you can set here a different name for you and your project contributors.
	'change_name' => ['fuck' => 'a donkey', 'suck' => 'a duck'],
];

$WebHookReport = '';
$KeyAkerino = '';


// Scores/PP config
$ScoresConfig = [
	"enablePP" => true,
	"useNewBeatmapsTable" => true,		// 0: get beatmaps names from beatmaps_names (old php scores server)
										// 1: get beatmaps names from beatmaps (LETS)
	"api_key" => "",
	"rankRequestsQueueSize" => 20,
	"rankRequestsPerUser" => 2
];

// ip env (ip fix with caddy)
$ipEnv = 'REMOTE_ADDR';	// HTTP_X_FORWARDED_FOR

// Google recaptcha config
$reCaptchaConfig = [
	"site_key" => "",
	"secret_key" => "",
	"ip" => false
];

$redisConfig = [
	"scheme" => "tcp",
	"host" => "redis",
	"port" => 6379
];
