<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home_model extends CI_Model{

	public function getPosts(){
		$posts = array();

		$this->db->select( 't1.*','t2.categories' );
		$this->db->from( 'post_data t1' );
		$this->db->join( 'category t2', 't1.category = t2.sl_no', 'inner' );
		$this->db->where( 'status', 1);
		$this->db->order_by( 'date_of_post DESC' );
		$this->db->limit(10);

	    $total_rows = $this->db->count_all_results( '', false );
		$query = $this->db->get();

		if ( $query ) {

			if ( $query && $query->num_rows() > 0 ) {
				foreach( $query->result() as $row ) {

					$post['user_id'] = $row->user_id;
					$post['post_id'] = $row->post_id;
					$post['title'] = $row->title;
					$post['description'] = $row->description;
					$post['category'] = $row->category;
					$post['tags'] = $row->tags;
					$post['image_title'] = $row->image_title;
					$post['image_add'] = $row->image_add;
					$post['image_desp'] = $row->image_desp;
					$post['status'] = $row->status;
					$post['no_of_views'] = $row->no_of_views;
			   /*   $postDate = DateTime::createFromFormat( 'Y-m-d H:i:s', $query['illustration_created'], new DateTimeZone( 'UTC' ) );
			      $postDate->setTimeZone( new DateTimeZone( 'Asia/Calcutta' ) );
			      $response['illustration_created_date'] = $postDate->format( 'M d, Y' );*/
					$post['date_of_post'] = $row->date_of_post;

					array_push( $posts, $post );
				}
			}
		}		    		 
		return array( 'total_rows' => $total_rows, 'posts' => $posts );
	}
	
}

?>