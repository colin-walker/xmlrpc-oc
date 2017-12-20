# XML-RPC OC

Open comments on WordPress posts submitted via XML-RPC.

Posts submitted via XML-RPC dont always appear to respect the default setting for having comments open or closed.

This plugin simply adds a filter to the `wp_insert_post_data` hook to set `comment_status` to “open”