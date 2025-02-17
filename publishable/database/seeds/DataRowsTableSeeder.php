<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;

class DataRowsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $dataRow = $this->dataRow('id', 1);
        if (!$dataRow->exists) 
        {
            
                \DB::table('data_rows')->insert(
                array (
                    'id' => 1,
                    'data_type_id' => 1,
                    'field' => 'id',
                    'type' => 'number',
                    'display_name' => 'ID',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 1,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 2,
                    'data_type_id' => 1,
                    'field' => 'name',
                    'type' => 'text',
                    'display_name' => 'Name',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{"validation":{"rule":"required|max:255"}}',
                    'order' => 2,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 3,
                    'data_type_id' => 1,
                    'field' => 'email',
                    'type' => 'text',
                    'display_name' => 'Email',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{"validation":{"rule":"required|email|max:255|unique:users,email,1"}}',
                    'order' => 3,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 4,
                    'data_type_id' => 1,
                    'field' => 'password',
                    'type' => 'password',
                    'display_name' => 'Password',
                    'required' => 1,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 4,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 5,
                    'data_type_id' => 1,
                    'field' => 'remember_token',
                    'type' => 'text',
                    'display_name' => 'Remember Token',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 5,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 6,
                    'data_type_id' => 1,
                    'field' => 'created_at',
                    'type' => 'timestamp',
                    'display_name' => 'Created At',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 6,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 7,
                    'data_type_id' => 1,
                    'field' => 'updated_at',
                    'type' => 'timestamp',
                    'display_name' => 'Updated At',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 7,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 8,
                    'data_type_id' => 1,
                    'field' => 'avatar',
                    'type' => 'image',
                    'display_name' => 'Avatar',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'order' => 8,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 9,
                    'data_type_id' => 1,
                    'field' => 'user_belongsto_role_relationship',
                    'type' => 'relationship',
                    'display_name' => 'Role',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 0,
                    'details' => '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsTo","column":"role_id","key":"id","label":"display_name","pivot_table":"roles","pivot":"0","taggable":"0"}',
                    'order' => 10,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 10,
                    'data_type_id' => 1,
                    'field' => 'user_belongstomany_role_relationship',
                    'type' => 'relationship',
                    'display_name' => 'Roles',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 0,
                    'details' => '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsToMany","column":"id","key":"id","label":"display_name","pivot_table":"user_roles","pivot":"1","taggable":"0"}',
                    'order' => 11,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 12,
                    'data_type_id' => 1,
                    'field' => 'settings',
                    'type' => 'hidden',
                    'display_name' => 'Settings',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 12,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 13,
                    'data_type_id' => 2,
                    'field' => 'id',
                    'type' => 'number',
                    'display_name' => 'ID',
                    'required' => 1,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 1,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 14,
                    'data_type_id' => 2,
                    'field' => 'name',
                    'type' => 'text',
                    'display_name' => 'Name',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'order' => 2,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 15,
                    'data_type_id' => 2,
                    'field' => 'created_at',
                    'type' => 'timestamp',
                    'display_name' => 'Created At',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 3,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 16,
                    'data_type_id' => 2,
                    'field' => 'updated_at',
                    'type' => 'timestamp',
                    'display_name' => 'Updated At',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 4,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 17,
                    'data_type_id' => 3,
                    'field' => 'id',
                    'type' => 'number',
                    'display_name' => 'ID',
                    'required' => 1,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 1,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 18,
                    'data_type_id' => 3,
                    'field' => 'name',
                    'type' => 'text',
                    'display_name' => 'Name',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'order' => 2,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 19,
                    'data_type_id' => 3,
                    'field' => 'created_at',
                    'type' => 'timestamp',
                    'display_name' => 'Created At',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 3,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 20,
                    'data_type_id' => 3,
                    'field' => 'updated_at',
                    'type' => 'timestamp',
                    'display_name' => 'Updated At',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 4,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 21,
                    'data_type_id' => 3,
                    'field' => 'display_name',
                    'type' => 'text',
                    'display_name' => 'Display Name',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{"validation":{"rule":"required|max:255"}}',
                    'order' => 5,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 22,
                    'data_type_id' => 1,
                    'field' => 'role_id',
                    'type' => 'text',
                    'display_name' => 'Role',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'order' => 9,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 45,
                    'data_type_id' => 6,
                    'field' => 'id',
                    'type' => 'number',
                    'display_name' => 'ID',
                    'required' => 1,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 1,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 46,
                    'data_type_id' => 6,
                    'field' => 'author_id',
                    'type' => 'text',
                    'display_name' => 'Author',
                    'required' => 1,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 2,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 47,
                    'data_type_id' => 6,
                    'field' => 'title',
                    'type' => 'text',
                    'display_name' => 'Title',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'order' => 3,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 48,
                    'data_type_id' => 6,
                    'field' => 'excerpt',
                    'type' => 'text_area',
                    'display_name' => 'Excerpt',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'order' => 4,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 49,
                    'data_type_id' => 6,
                    'field' => 'body',
                    'type' => 'rich_text_box',
                    'display_name' => 'Body',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'order' => 5,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 50,
                    'data_type_id' => 6,
                    'field' => 'slug',
                    'type' => 'text',
                    'display_name' => 'Slug',
                    'required' => 1,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{"slugify":{"origin":"title"},"validation":{"rule":"unique:pages,slug"}}',
                    'order' => 6,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 51,
                    'data_type_id' => 6,
                    'field' => 'meta_description',
                    'type' => 'text',
                    'display_name' => 'Meta Description',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'order' => 7,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 52,
                    'data_type_id' => 6,
                    'field' => 'meta_keywords',
                    'type' => 'text',
                    'display_name' => 'Meta Keywords',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'order' => 8,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 53,
                    'data_type_id' => 6,
                    'field' => 'status',
                    'type' => 'select_dropdown',
                    'display_name' => 'Status',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{"default":"INACTIVE","options":{"INACTIVE":"INACTIVE","ACTIVE":"ACTIVE"}}',
                    'order' => 9,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 54,
                    'data_type_id' => 6,
                    'field' => 'created_at',
                    'type' => 'timestamp',
                    'display_name' => 'Created At',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 10,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 55,
                    'data_type_id' => 6,
                    'field' => 'updated_at',
                    'type' => 'timestamp',
                    'display_name' => 'Updated At',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 11,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 56,
                    'data_type_id' => 6,
                    'field' => 'image',
                    'type' => 'image',
                    'display_name' => 'Page Image',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'order' => 12,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 57,
                    'data_type_id' => 7,
                    'field' => 'id',
                    'type' => 'text',
                    'display_name' => 'Id',
                    'required' => 1,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 1,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 58,
                    'data_type_id' => 7,
                    'field' => 'title',
                    'type' => 'text',
                    'display_name' => 'Title',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{"validation":{"rule":"max:256|unique:events,title"}}',
                    'order' => 2,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 59,
                    'data_type_id' => 7,
                    'field' => 'description',
                    'type' => 'rich_text_box',
                    'display_name' => 'Description',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'order' => 4,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 60,
                    'data_type_id' => 7,
                    'field' => 'faq',
                    'type' => 'rich_text_box',
                    'display_name' => 'Faq',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'order' => 5,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 61,
                    'data_type_id' => 7,
                    'field' => 'thumbnail',
                    'type' => 'image',
                    'display_name' => 'Thumbnail',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'order' => 10,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 62,
                    'data_type_id' => 7,
                    'field' => 'poster',
                    'type' => 'image',
                    'display_name' => 'Poster',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'order' => 11,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 63,
                    'data_type_id' => 7,
                    'field' => 'images',
                    'type' => 'multiple_images',
                    'display_name' => 'Images',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'order' => 12,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 65,
                    'data_type_id' => 7,
                    'field' => 'venue',
                    'type' => 'text',
                    'display_name' => 'Venue',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{"validation":{"rule":"max:256"},"display":{"width":"6"}}',
                    'order' => 14,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 66,
                    'data_type_id' => 7,
                    'field' => 'address',
                    'type' => 'text_area',
                    'display_name' => 'Address',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{"validation":{"rule":"max:512"},"display":{"width":"6"}}',
                    'order' => 16,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 67,
                    'data_type_id' => 7,
                    'field' => 'city',
                    'type' => 'text',
                    'display_name' => 'City',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{"validation":{"rule":"max:256"},"display":{"width":"3"}}',
                    'order' => 17,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 68,
                    'data_type_id' => 7,
                    'field' => 'state',
                    'type' => 'text',
                    'display_name' => 'State',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{"validation":{"rule":"max:256"},"display":{"width":"3"}}',
                    'order' => 18,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 69,
                    'data_type_id' => 7,
                    'field' => 'zipcode',
                    'type' => 'text',
                    'display_name' => 'Zipcode',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{"validation":{"rule":"max:64"},"display":{"width":"3"}}',
                    'order' => 19,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 71,
                    'data_type_id' => 7,
                    'field' => 'start_date',
                    'type' => 'date',
                    'display_name' => 'Start Date',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{"validation":{"rule":"date|after_or_equal:tomorrow"},"display":{"width":"6"}}',
                    'order' => 21,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 72,
                    'data_type_id' => 7,
                    'field' => 'end_date',
                    'type' => 'date',
                    'display_name' => 'End Date',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{"validation":{"rule":"date|after_or_equal:start_date"},"display":{"width":"6"}}',
                    'order' => 22,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 73,
                    'data_type_id' => 7,
                    'field' => 'start_time',
                    'type' => 'time',
                    'display_name' => 'Start Time',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{"validation":{"rule":""},"display":{"width":"6"}}',
                    'order' => 23,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 74,
                    'data_type_id' => 7,
                    'field' => 'end_time',
                    'type' => 'time',
                    'display_name' => 'End Time',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{"validation":{"rule":""},"display":{"width":"6"}}',
                    'order' => 24,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 79,
                    'data_type_id' => 7,
                    'field' => 'status',
                    'type' => 'select_dropdown',
                    'display_name' => 'Status',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{"default":"1","options":{"0":"Disabled","1":"Enabled"},"validation":{"rule":"required"}}',
                    'order' => 36,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 80,
                    'data_type_id' => 7,
                    'field' => 'meta_title',
                    'type' => 'text',
                    'display_name' => 'Meta Title',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{"validation":{"rule":"max:256"}}',
                    'order' => 31,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 82,
                    'data_type_id' => 7,
                    'field' => 'meta_description',
                    'type' => 'text_area',
                    'display_name' => 'Meta Description',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'order' => 33,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 87,
                    'data_type_id' => 7,
                    'field' => 'created_at',
                    'type' => 'timestamp',
                    'display_name' => 'Created At',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 37,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 88,
                    'data_type_id' => 7,
                    'field' => 'updated_at',
                    'type' => 'timestamp',
                    'display_name' => 'Updated At',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 38,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 114,
                    'data_type_id' => 15,
                    'field' => 'id',
                    'type' => 'text',
                    'display_name' => 'Id',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 0,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 1,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 115,
                    'data_type_id' => 15,
                    'field' => 'name',
                    'type' => 'text',
                    'display_name' => 'Name',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{"validation":{"rule":"required|max:64|unique:categories,name,1"}}',
                    'order' => 2,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 116,
                    'data_type_id' => 15,
                    'field' => 'slug',
                    'type' => 'text',
                    'display_name' => 'Slug',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{"validation":{"rule":"required|max:128|unique:categories,slug,1"},"slugify":{"origin":"name"}}',
                    'order' => 3,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 117,
                    'data_type_id' => 15,
                    'field' => 'created_at',
                    'type' => 'timestamp',
                    'display_name' => 'Created At',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 7,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 118,
                    'data_type_id' => 15,
                    'field' => 'updated_at',
                    'type' => 'timestamp',
                    'display_name' => 'Updated At',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 8,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 119,
                    'data_type_id' => 7,
                    'field' => 'event_belongsto_category_relationship',
                    'type' => 'relationship',
                    'display_name' => 'Category',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{"model":"Classiebit\\\\Eventmie\\\\Models\\\\Category","table":"categories","type":"belongsTo","column":"category_id","key":"id","label":"name","pivot_table":"categories","pivot":"0","taggable":"0"}',
                    'order' => 6,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 123,
                    'data_type_id' => 7,
                    'field' => 'country_id',
                    'type' => 'text',
                    'display_name' => 'Country Id',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{"validation":{"rule":"integer"}}',
                    'order' => 15,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 124,
                    'data_type_id' => 7,
                    'field' => 'category_id',
                    'type' => 'text',
                    'display_name' => 'Category Id',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{"validation":{"rule":"integer"}}',
                    'order' => 29,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 143,
                    'data_type_id' => 15,
                    'field' => 'status',
                    'type' => 'select_dropdown',
                    'display_name' => 'Status',
                    'required' => 1,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{"default":"1","options":{"0":"Disabled","1":"Enabled"},"validation":{"rule":"required"}}',
                    'order' => 9,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 144,
                    'data_type_id' => 15,
                    'field' => 'thumb',
                    'type' => 'image',
                'display_name' => 'Thumb (480x270 px)',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{"validation":{"rule":"nullable"},"resize":{"width":"480","height":"270"},"quality":"70%","upsize":true}',
                    'order' => 4,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 145,
                    'data_type_id' => 15,
                    'field' => 'image',
                    'type' => 'image',
                    'display_name' => 'Image',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{"validation":{"rule":"nullable"},"resize":{"width":"157","height":"467"},"quality":"70%","upsize":true}',
                    'order' => 5,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 146,
                    'data_type_id' => 15,
                    'field' => 'template',
                    'type' => 'radio_btn',
                    'display_name' => 'Template',
                    'required' => 1,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{"default":"1","options":{"1":"Template 1","2":"Template 2","3":"Template 3"},"validation":{"rule":"required"}}',
                    'order' => 6,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 149,
                    'data_type_id' => 7,
                    'field' => 'slug',
                    'type' => 'text',
                    'display_name' => 'Slug',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{"validation":{"rule":"max:512"},"slugify":{"origin":"title"},"readonly":true}',
                    'order' => 3,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 196,
                    'data_type_id' => 25,
                    'field' => 'id',
                    'type' => 'number',
                    'display_name' => 'Id',
                    'required' => 1,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 1,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 197,
                    'data_type_id' => 25,
                    'field' => 'name',
                    'type' => 'text',
                    'display_name' => 'Name',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 2,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 198,
                    'data_type_id' => 25,
                    'field' => 'email',
                    'type' => 'text',
                    'display_name' => 'Email',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 3,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 199,
                    'data_type_id' => 25,
                    'field' => 'title',
                    'type' => 'text',
                    'display_name' => 'Title',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 4,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 200,
                    'data_type_id' => 25,
                    'field' => 'message',
                    'type' => 'text',
                    'display_name' => 'Message',
                    'required' => 1,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 5,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 201,
                    'data_type_id' => 25,
                    'field' => 'read',
                    'type' => 'timestamp',
                    'display_name' => 'Read',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 6,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 202,
                    'data_type_id' => 25,
                    'field' => 'read_by',
                    'type' => 'number',
                    'display_name' => 'Read By',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 7,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 203,
                    'data_type_id' => 25,
                    'field' => 'created_at',
                    'type' => 'timestamp',
                    'display_name' => 'Created At',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 8,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 204,
                    'data_type_id' => 25,
                    'field' => 'updated_at',
                    'type' => 'timestamp',
                    'display_name' => 'Updated At',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 9,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 209,
                    'data_type_id' => 7,
                    'field' => 'publish',
                    'type' => 'select_dropdown',
                    'display_name' => 'Publish',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{"default":"0","options":{"0":"In Draft","1":"Published"},"validation":{"rule":"required"}}',
                    'order' => 35,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 221,
                    'data_type_id' => 27,
                    'field' => 'id',
                    'type' => 'text',
                    'display_name' => 'Id',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 1,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 222,
                    'data_type_id' => 27,
                    'field' => 'customer_id',
                    'type' => 'text',
                    'display_name' => 'Customer Id',
                    'required' => 1,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 7,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 224,
                    'data_type_id' => 27,
                    'field' => 'event_id',
                    'type' => 'text',
                    'display_name' => 'Event Id',
                    'required' => 1,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 9,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 226,
                    'data_type_id' => 27,
                    'field' => 'quantity',
                    'type' => 'text',
                    'display_name' => 'Quantity',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 12,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 227,
                    'data_type_id' => 27,
                    'field' => 'price',
                    'type' => 'text',
                    'display_name' => 'Price',
                    'required' => 1,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 13,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 229,
                    'data_type_id' => 27,
                    'field' => 'net_price',
                    'type' => 'text',
                    'display_name' => 'Net Price',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 15,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 230,
                    'data_type_id' => 27,
                    'field' => 'status',
                    'type' => 'select_dropdown',
                    'display_name' => 'Status',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{"default":"1","options":{"0":"Disabled","1":"Enabled"},"validation":{"rule":"required"}}',
                    'order' => 26,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 231,
                    'data_type_id' => 27,
                    'field' => 'created_at',
                    'type' => 'timestamp',
                    'display_name' => 'Created At',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 27,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 232,
                    'data_type_id' => 27,
                    'field' => 'updated_at',
                    'type' => 'timestamp',
                    'display_name' => 'Updated At',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 28,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 233,
                    'data_type_id' => 27,
                    'field' => 'event_title',
                    'type' => 'text',
                    'display_name' => 'Event Title',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{"disabled":"true"}',
                    'order' => 4,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 234,
                    'data_type_id' => 27,
                    'field' => 'event_start_date',
                    'type' => 'text',
                    'display_name' => 'Event Start Date',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 17,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 235,
                    'data_type_id' => 27,
                    'field' => 'event_end_date',
                    'type' => 'text',
                    'display_name' => 'Event End Date',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 18,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 236,
                    'data_type_id' => 27,
                    'field' => 'event_start_time',
                    'type' => 'text',
                    'display_name' => 'Event Start Time',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 19,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 237,
                    'data_type_id' => 27,
                    'field' => 'event_end_time',
                    'type' => 'text',
                    'display_name' => 'Event End Time',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 20,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 241,
                    'data_type_id' => 27,
                    'field' => 'event_category',
                    'type' => 'text',
                    'display_name' => 'Event Category',
                    'required' => 1,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 3,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 244,
                    'data_type_id' => 27,
                    'field' => 'order_number',
                    'type' => 'text',
                    'display_name' => 'Order Number',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{"disabled":"true"}',
                    'order' => 2,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 246,
                    'data_type_id' => 27,
                    'field' => 'customer_name',
                    'type' => 'text',
                    'display_name' => 'Customer Name',
                    'required' => 1,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{"disabled":"true"}',
                    'order' => 23,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 247,
                    'data_type_id' => 27,
                    'field' => 'customer_email',
                    'type' => 'text',
                    'display_name' => 'Customer Email',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{"disabled":"true"}',
                    'order' => 24,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 261,
                    'data_type_id' => 7,
                    'field' => 'is_publishable',
                    'type' => 'text',
                    'display_name' => 'Is Publishable',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{}',
                    'order' => 36,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 275,
                    'data_type_id' => 1,
                    'field' => 'email_verified_at',
                    'type' => 'timestamp',
                    'display_name' => 'Email Verified At',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 6,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 279,
                    'data_type_id' => 31,
                    'field' => 'id',
                    'type' => 'text',
                    'display_name' => 'Id',
                    'required' => 1,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 1,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 280,
                    'data_type_id' => 31,
                    'field' => 'title',
                    'type' => 'text',
                    'display_name' => 'Title',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{"validation":{"rule":"max:64"}}',
                    'order' => 2,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 281,
                    'data_type_id' => 31,
                    'field' => 'subtitle',
                    'type' => 'text',
                    'display_name' => 'Subtitle',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{"validation":{"rule":"max:64"}}',
                    'order' => 3,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 282,
                    'data_type_id' => 31,
                    'field' => 'image',
                    'type' => 'image',
                    'display_name' => 'Image',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{"resize":{"width":"1920","height":"1080"},"quality":"60%","upsize":true}',
                    'order' => 4,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 283,
                    'data_type_id' => 31,
                    'field' => 'status',
                    'type' => 'select_dropdown',
                    'display_name' => 'Status',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => '{"default":"1","options":{"0":"Disabled","1":"Enabled"},"validation":{"rule":"required"}}',
                    'order' => 5,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 284,
                    'data_type_id' => 31,
                    'field' => 'created_at',
                    'type' => 'timestamp',
                    'display_name' => 'Created At',
                    'required' => 0,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 6,
                )
                );
                \DB::table('data_rows')->insert(
                array (
                    'id' => 285,
                    'data_type_id' => 31,
                    'field' => 'updated_at',
                    'type' => 'timestamp',
                    'display_name' => 'Updated At',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'details' => '{}',
                    'order' => 7,
                )
                );
                \DB::table('data_rows')->insert(
                    array (
                        'id' => 286,
                        'data_type_id' => 7,
                        'field' => 'meta_keywords',
                        'type' => 'text',
                        'display_name' => 'Meta Keywords',
                        'required' => 0,
                        'browse' => 1,
                        'read' => 1,
                        'edit' => 1,
                        'add' => 1,
                        'delete' => 1,
                        'details' => '{}',
                        'order' => 20,
                    )
                );
        }
        
       
        
        
    }

    protected function dataRow($field, $for)
    {
        return DataRow::firstOrNew([$field => $for]);
    }
}