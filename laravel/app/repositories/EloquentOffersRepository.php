<?php 

class EloquentOffersRepository implements OffersRepositoryInterface
{
	private $offers;

	public function __construct(Offers $offers)
	{
		$this->offers = $offers;
	}

	public function all()
	{
		return $this->offers->paginate(15);
	}

	public function find($id)
	{
		return $this->offers->find($id);
	}

	public function store($input)
	{
        $offers = new Offers;
        
        $offers->restaurant_id = $input['restaurant_id'];
        
        $offers->description = $input['description'];
        
        $offers->price = $input['price'];
        
        $offers->min_guest = $input['min_guest'];
        
        $offers->max_guest = $input['max_guest'];
        
        $offers->days_avail = $input['days_avail'];
        
        $offers->timing = $input['timing'];
        
        $offers->active = $input['active'];
        
        $offers->expire_on = $input['expire_on'];
        
        $offers->save();
	}

	public function update($input)
	{
	    $this->offers->update($input);
	}

	public function destroy($id)
	{
		$this->offers->find($id)->delete();
	}

}
