using System;
using SocketIO.Client;
using Newtonsoft.Json;
using System.Runtime.InteropServices;
using Newtonsoft.Json.Linq;
using System.Net;
using System.IO;
using System.Windows.Forms;
using System.Diagnostics;
using System.Threading;

namespace SimpleClient
{   class MainClass
   {

 public static String ScanFolderPath = Application.StartupPath + @"\ScanFolder";
 public static SocketIOClient io = new SocketIOClient();
 public static Namespace socket;
 public static string server = "http://localhost:8080/";
 public static string av = "Avast Command Line Scanner";
    static void cchecker() 
    {
        do
        {
           if(io.Connected==false)
           {

              
               socket = io.Connect(server);
               Thread.Sleep(3000);

                   if (io.Connected == true)
                   {
                       data avData = new data();
                       avData.av = av;//Utilities.GA(); // Get Antivirus

                       socket.Emit("new_volunteer", (Object)avData);


                    

                   }
             
           }

           Thread.Sleep(2000);

        } while (true);


    


    }



      static void Main()
      {
        

         
        
         socket = io.Connect(server);
          

        try
        {
            if(!Directory.Exists(ScanFolderPath))
            {
                Directory.CreateDirectory(ScanFolderPath);
            }
        }
        catch { }



        do
        {
            if (io.Connected == true)
            {
                data avData = new data();
                avData.av = av;//Utilities.GA(); // Get Antivirus

                socket.Emit("new_volunteer", (Object)avData);
                break;

            }
        } while (true);



        Thread cc = new Thread(cchecker);
        cc.Start();



        socket.On("data", (args, cllback) =>
        {

          

            // Reserved For Latter Use \\
            // jsondata     = ((JObject)args[0]).ToString().Replace(Environment.NewLine,"").Replace(" ","");
            //        data x=new data();
            //      data deserializedProduct = JsonConvert.DeserializeObject<data>(jsondata);
            //    Console.WriteLine(deserializedProduct.av);




        });

        socket.On("RecvFile", (args, cllback) =>
        {


            string jsondata = ((JObject)args[0]).ToString().Replace(Environment.NewLine, "").Replace(" ", "");
            FileData FD = JsonConvert.DeserializeObject<FileData>(jsondata);
            WebClient DR = new WebClient();
            DR.Headers["User-Agent"] = "ScanNetwork Client V0.1";
            try
            {
                Thread.Sleep(2000);
                byte[] lpData = DR.DownloadData(FD.FileLink);
                byte[] half = new byte[(lpData.Length / 2)];
                Buffer.BlockCopy(lpData, 0, half, 0, half.Length);
                String ComputedHash = Utilities.CalculateMD5Hash(lpData);
                File.WriteAllBytes(ScanFolderPath + @"\" + ComputedHash, lpData);
                if (ComputedHash == FD.HASH)
                {
                    try
                    {
                      
                        String FileForScanPath = ScanFolderPath + @"\" + ComputedHash;

                        string[] Results = Scanners.AvastScan(FileForScanPath);

                        ScanData scandata = new ScanData();
                        scandata.Antivirus = "Avast";
                        scandata.HASH = ComputedHash;
                        scandata.LastUpdate = Results[0];
                        scandata.Result = Results[1];
                        Console.WriteLine(JsonConvert.SerializeObject((Object)scandata)); // Debug Purpose


                        socket.Emit("receive.result", (Object)scandata);





                    }
                    catch { }

                }

            }
            catch { }







        });

         
               
             
         
      }
   }
}
