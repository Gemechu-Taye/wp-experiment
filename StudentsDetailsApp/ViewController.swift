//
//  ViewController.swift
//  StudentsDetailsApp
//
//  Created by Gemechu Taye on 17/10/22.
//

import UIKit
class ViewController: UIViewController {
@IBOutlet weak var objT1: UITextField!
@IBOutlet weak var objT2: UITextField!
@IBOutlet weak var objT3: UITextField!
@IBOutlet weak var objT4: UITextField!
@IBOutlet weak var objT5: UITextField!
@IBOutlet weak var b1: UIButton!

    override func viewDidLoad()
{
super.viewDidLoad()
// Do any additional setup after loading the view.
}
@IBAction func b1onClick()
{
print("Student details are :\(objT1.text!) \n,\(objT2.text!)\n,\(objT3.text!)\n,\(objT4.text!) \n,\(objT5.text!)")
}
}
