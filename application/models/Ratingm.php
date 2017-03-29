<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Ratingm extends CI_Model
{


    public function show_rating(){

        //$query = "SELECT rating_number, FORMAT((total_points / rating_number),1) as average_rating FROM post_rating WHERE post_id = 1 AND status = 1";
        $query=$this->db->query("SELECT rating_number, FORMAT((total_points / rating_number),1) as average_rating FROM post_rating WHERE post_id = 1 AND status = 1");
        return $query->result_array();

    }
   /* public function insert_rate($postID)
    {
        extract($_POST);

        if (!empty($_POST['ratingPoints'])) {
            //$postID = $_POST['postID'];
            $ratingNum = 1;
            $ratingPoints = $_POST['ratingPoints'];

            //Check the rating row with same post ID
            $prevRatingQuery = "SELECT * FROM post_rating WHERE post_id = " . $postID;
            $prevRatingResult = $this->db->query($prevRatingQuery);
            if ($prevRatingResult->num_rows > 0):
                $prevRatingRow = $prevRatingResult->fetch_assoc();
                $ratingNum = $prevRatingRow['rating_number'] + $ratingNum;
                $ratingPoints = $prevRatingRow['total_points'] + $ratingPoints;
                //Update rating data into the database
                $query = "UPDATE post_rating SET rating_number = '" . $ratingNum . "', total_points = '" . $ratingPoints . "', modified = '" . date("Y-m-d H:i:s") . "' WHERE post_id = " . $postID;
                $update = $this->db->query($query);
            else:
                //Insert rating data into the database
                $query = "INSERT INTO post_rating (post_id,rating_number,total_points,created,modified) VALUES(" . $postID . ",'" . $ratingNum . "','" . $ratingPoints . "','" . date("Y-m-d H:i:s") . "','" . date("Y-m-d H:i:s") . "')";
                $insert = $this->db->query($query);
            endif;

            //Fetch rating deatails from database
            $query2 = "SELECT rating_number, FORMAT((total_points / rating_number),1) as average_rating FROM post_rating WHERE post_id = " . $postID . " AND status = 1";
            $result = $this->db->query($query2);
            $ratingRow = $result->fetch_assoc();

            if ($ratingRow) {
                $ratingRow['status'] = 'ok';
            } else {
                $ratingRow['status'] = 'err';
            }

            //Return json formatted rating data
            echo json_encode($ratingRow);
        }
    }*/

    public function insert_rating($rating, $item_id, $username)
    {


        $data = array(
            'res_id' => $item_id,
            'rating' => $rating,
            'username' => $username
        );
        $this->db->insert('res_rating',$data);
    }
}


?>