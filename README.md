# Stops the WordPress Admin Heartbeat

This is a tiny plugin which is used to stop WordPress from calling /admin-ajax.php for heartbeat checks. This is useful if you're debugging code, because it stops WordPress from hitting your breakpoints every few seconds.

## Heartbeat Only:

This will stop WordPress's heartbeat only. Some plugins still use /admin-ajax.php for their own purposes. If this happens it might be possible to see which plugin is responsible by looking at the XHR payload.

## Important Note:

This is intended to help devleopers whilst they're debugging. Don't use it in testing or production, because it will have unintended side effects. 
