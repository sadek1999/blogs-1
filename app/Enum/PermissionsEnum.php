<?php

namespace App\Enum;

enum PermissionsEnum:string
{
    case ManageFeatures='manageFeatures';
    case ManageUsers='manageUsers';
    case ManageComments="manageComments";
    case UpvoteDownvote='upvoteDownvote';
}
