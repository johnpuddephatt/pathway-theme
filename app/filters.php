<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

add_filter('carbon_fields_map_field_api_key', function ($key) {
    return 'AIzaSyCNY11TdN4n8_smofsQV-8AbQsfC85Z7xM';
});



add_filter('manage_users_columns', function ($columns) {
    $columns['user_team'] = 'Pathway Team'; // Change these values
    return $columns;
});

// Populate the custom column with data

add_filter('manage_users_custom_column', function ($value, $column_name, $user_id) {
    if ($column_name == 'user_team') {
        // Replace 'your_meta_field_key' with your actual meta field key
        $meta_value = get_user_meta($user_id, '_user_team', true);


        // Return the meta value, or a default message if empty
        return !empty($meta_value) ? esc_html($meta_value) : '—';
    }
    return $value;
}, 10, 3);




// Add filter dropdown above the users table

add_action('restrict_manage_users', function () {
    $screen = get_current_screen();
    if ($screen->id !== 'users') {
        return;
    }

    // Get all unique values for this meta field
    global $wpdb;
    $meta_key = '_user_team'; // Use your actual meta key
    $values = $wpdb->get_col($wpdb->prepare("
        SELECT DISTINCT meta_value 
        FROM {$wpdb->usermeta} 
        WHERE meta_key = %s 
        AND meta_value != '' 
        ORDER BY meta_value ASC
    ", $meta_key));

    if (empty($values)) {
        return;
    }

    $selected = isset($_GET['user_team_filter']) && !empty($_GET['user_team_filter']) ? $_GET['user_team_filter'] : '';

    echo '<select style="float: none; margin-left: 15px;" class="" onchange="window.location.href=window.location.href.split(\'?\')[0] + \'?user_team_filter=\' + this.value" name="user_team_filter" >';
    echo '<option value="">All Pathway teams</option>'; // Change this label

    foreach ($values as $value) {
        $selected_attr = selected($selected, $value, false);
        echo '<option value="' . esc_attr($value) . '"' . $selected_attr . '>' . esc_html($value) . '</option>';
    }

    echo '</select>';
});

// Handle the filtering logic

add_action('pre_get_users', function ($query) {
    global $pagenow;

    if (is_admin() && $pagenow == 'users.php' && isset($_GET['user_team_filter']) && !empty($_GET['user_team_filter'])) {
        $meta_key = '_user_team'; // Use your actual meta key
        $meta_value = sanitize_text_field($_GET['user_team_filter']);

        $query->set('meta_key', $meta_key);
        $query->set('meta_value', $meta_value);
        $query->set('meta_compare', '=');
    }
});
