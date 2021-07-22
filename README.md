# claims app
get all claims - api/claims (get)

create user - api/users/ (post) @param:

    "FirstName" => "string|required|min:5|max:50",
    "Name"      => "string|required|min:5|max:30",
    "password"  => "string|max:50|min:5",
    
create claim - api/claims/ (post) @param:    

    "user_id"    => "int|required|",
    "claim_text" => "text|required|min:5|max:1000",
 
 Delete claim api/claims/{claim} (DELETE)