<?php 

class EloquentGuestRepository implements GuestRepositoryInterface
{
	private $guest;

	public function __construct(Guest $guest)
	{
		$this->guest = $guest;
	}

	public function all()
	{
		return $this->guest->paginate(15);
	}

	public function find($id)
	{
		return $this->guest->find($id);
	}

	public function store($input)
	{
        $guest = new Guest;
        
        $guest->id = $input['id'];
        
        $guest->name = $input['name'];
        
        $guest->phone_number = $input['phone_number'];
        
        $guest->save();
	}

	public function update($input)
	{
	    $this->guest->update($input);
	}

	public function destroy($id)
	{
		$this->guest->find($id)->delete();
	}

}
