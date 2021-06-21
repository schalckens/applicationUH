<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
//use Database\Factories\ContactFactory;
use App\Models\Contact;
use App\Models\User;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class ContactTest extends TestCase
{
    use RefreshDatabase;
    use WithoutMiddleware;

    private $user;
    private $address;
    private $contact;

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->user = factory(User::class)->create();
        $this->address = factory(Address::class)->create();
        $this->contact = factory(Contact::class)->create();
        
    }
    
    public function testIndex()
    {
        // // Création Mock
        // $this->mock(Contact::class,function ($mock) 
        // {
        //     $mock->shouldReceive('all')->andReturn('contacts');
        // });

        //Action
        $response = $this->get(route('contacts.index'));

        //Assertions
        $response->assertOk();
        $response->assertViewHas('contacts');
    }

    public function testCreate()
    {
        //Action
        $response = $this->get(route('contacts.create'));

        //Assertions
        $response->assertOk();
        $response->assertViewIs('contacts.create');
    }

    public function testStore()
    {
        
        $data = [
            'user_id' => $this->user->id,
            'address_id' => $this->address->id,
            'phone' => '020505005055',
            'email' => 'dihfi@qshi.com'
        ];

        //Action
        $response = $this->postJson(route('contacts.store'), $data);

        //Assertions
        $response->assertRedirect(route('contacts.index'));
        $this->assertDatabaseHas('contacts', $data);

    }

    public function testEdit()
    {
        // // Création Mock
        // $this->mock(Contact::class,function ($mock) 
        // {
        //     $mock->shouldReceive('findOrFail')->andReturn('contact');
        // });

        //Action
        $response = $this->get(route('contacts.edit', ['id' => $this->contact->id]));

        //Assertions
        $response->assertOk();
        $response->assertViewHas('contact');
        $response->assertViewIs('contacts.edit');
    }

    public function testUpdate()
    {
        $data = [
            'id' => $this->contact->id,
            'user_id' => $this->user->id,
            'address_id' => $this->address->id,
            'phone' => '1111111111111',
            'email' => $this->contact->email
        ];

        //Action
        $response = $this->postJson(route('contacts.update',['id' => $this->contact->id]),$data);
        
        //Assertions
        $response->assertRedirect(route('contacts.index'));
        $this->assertDatabaseHas('contacts', $data);
    }

    public function testShow()
    {
        // // Création Mock
        // $this->mock(Contact::class,function ($mock) 
        // {
        //     $mock->shouldReceive('findOrFail')->andReturn('contact');
        // });

        //Action
        $response = $this->get(route('contacts.show', ['id' => $this->contact->id]));

        //Assertions
        $response->assertSuccessful();
        $response->assertViewHas('contact');
        $response->assertViewIs('contacts.show');
    }

    public function testDestroy()
    {
        $data = [
            'id' => $this->contact->id,
            'user_id' => $this->user->id,
            'address_id' => $this->address->id,
            'phone' => $this->contact->phone,
            'email' => $this->contact->email
        ];

        //Action
        $response = $this->postJson(route('contacts.delete',['id' => $this->contact->id]), $data);

        //Assertions
        $response->assertRedirect(route('contacts.index'));
        $this->assertDatabaseMissing('contacts',$data);
    }
}
