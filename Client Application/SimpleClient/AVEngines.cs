using Microsoft.VisualBasic;
using System;
using System.Collections.Generic;
using System.Diagnostics;
using System.IO;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace SimpleClient
{
    class AVEngines
    {

        public static string[] AvastEngine(string AvastPath, string AvastDir, string Arguments)
        {
            List<string> SD = new List<string>();
            String dbt = "";
            try
            {

                FileInfo db = new FileInfo(AvastDir + @"\defs\aswdefs.ini");
                if (db.LastWriteTime.Year == 1681)
                {
                    dbt = db.CreationTime.Day + @"/" + db.CreationTime.Month + @"/" + db.CreationTime.Year;

                }
                else
                {

                    dbt = db.LastWriteTime.Day + @"/" + db.LastWriteTime.Month + @"/" + db.LastWriteTime.Year;

                }
                SD.Add(dbt);

            }


            catch
            {
                SD.Add(dbt);
            }


            ProcessStartInfo psi = new ProcessStartInfo();
            psi.WorkingDirectory = AvastDir;
            psi.FileName = AvastPath;
            psi.Arguments = Arguments;
            psi.UseShellExecute = false;
            psi.RedirectStandardOutput = true;
            psi.RedirectStandardInput = true;
            psi.RedirectStandardError = true;
            Process xi = Process.Start(psi);

            StreamReader x = xi.StandardOutput;

            String FResults = x.ReadToEnd();

            String Result = "";
            try
            {
                String SResults = Strings.Split(FResults, @"	")[1];
                Result = Strings.Split(SResults, Environment.NewLine)[0];
                try
                {
                    Result = Result.Replace("OK", "File is clean.");
                }
                catch { }
                SD.Add(Result);
                return SD.ToArray();
            }
            catch
            {
                SD.Add("");
                return SD.ToArray();
            }

        }


        public static string[] AviraEngine(string AviraPath, string AviraDir, string Arguments)
        {
            List<string> SD =new List<string>();
            String dbt = "";
            try
            {
                
                FileInfo db = new FileInfo(AviraDir + @"\vbase000.vdf");
                if (db.LastWriteTime.Year == 1681)
                {
                    dbt = db.CreationTime.Day + @"/" + db.CreationTime.Month + @"/" + db.CreationTime.Year;

                }
                else
                {

                    dbt = db.LastWriteTime.Day + @"/" + db.LastWriteTime.Month + @"/" + db.LastWriteTime.Year;

                }
               SD.Add(dbt);
            
            }
            catch {
                SD.Add(dbt);
            }
            ProcessStartInfo psi = new ProcessStartInfo();
            psi.WorkingDirectory = AviraDir;
            psi.FileName = AviraPath;
            psi.Arguments = Arguments;
            psi.UseShellExecute = false;
            psi.RedirectStandardOutput = true;
            psi.RedirectStandardInput = true;
            psi.RedirectStandardError = true;

            StreamReader x = Process.Start(psi).StandardOutput;

            String FResults = Strings.Split(x.ReadToEnd(), "Statistics")[0];
            String Final = "";
            try
            {
                Final = Strings.Split(FResults, @"<<<")[1].Replace(Environment.NewLine, "");
                Final = Final.Remove(Final.Length - 3, 3);

               SD.Add(Final);
               return SD.ToArray();

            }
            catch
            {

                Final = "File is clean.";
              SD.Add( Final);
              return SD.ToArray();

            }


        }


        public static string[] ESETEngine(string ESETPath, string ESETDir, string Arguments)
        {
            List<string> SD = new List<string>();
            String dbt = "";
            try
            {

                FileInfo db = new FileInfo(ESETDir + @"\em002_32.dat");
                if (db.LastWriteTime.Year == 1681)
                {
                    dbt = db.CreationTime.Day + @"/" + db.CreationTime.Month + @"/" + db.CreationTime.Year;

                }
                else
                {

                    dbt = db.LastWriteTime.Day + @"/" + db.LastWriteTime.Month + @"/" + db.LastWriteTime.Year;

                }
                SD.Add(dbt);

            }


            catch
            {
                SD.Add(dbt);
            }


            ProcessStartInfo psi = new ProcessStartInfo();
            psi.WorkingDirectory = ESETDir;
            psi.FileName = ESETPath;
            psi.Arguments = Arguments;
            psi.UseShellExecute = false;
            psi.RedirectStandardOutput = true;
            psi.RedirectStandardInput = true;
            psi.RedirectStandardError = true;

            StreamReader x = Process.Start(psi).StandardOutput;

            String FResults = x.ReadToEnd();
            MessageBox.Show(FResults);

            String Result = "";
            try
            {
                String SResults = Strings.Split(FResults, @"threat=" + Convert.ToChar(34))[1];
                Result = Strings.Split(SResults, @"" + Convert.ToChar(34))[0];
                SD.Add(Result);
                return SD.ToArray();
            }
            catch
            {
                Result = "File is clean.";
                SD.Add(Result);
                return SD.ToArray();
            }

        }


        public static string[] IKARUSEngine(string IKARUSPath, string IKARUSDir, string Arguments)
        {
            List<string> SD = new List<string>();
            String dbt = "";
            try
            {

                FileInfo db = new FileInfo(IKARUSDir + @"\t3sigs.vdb");
                if (db.LastWriteTime.Year == 1681)
                {
                    dbt = db.CreationTime.Day + @"/" + db.CreationTime.Month + @"/" + db.CreationTime.Year;

                }
                else
                {

                    dbt = db.LastWriteTime.Day + @"/" + db.LastWriteTime.Month + @"/" + db.LastWriteTime.Year;

                }
                SD.Add(dbt);

            }
            catch
            {
                SD.Add(dbt);
            }
            ProcessStartInfo psi = new ProcessStartInfo();
            psi.WorkingDirectory = IKARUSDir;
            psi.FileName = IKARUSPath;
            psi.Arguments = Arguments;
            psi.UseShellExecute = false;
            psi.RedirectStandardOutput = true;
            psi.RedirectStandardInput = true;
            psi.RedirectStandardError = true;

            StreamReader x = Process.Start(psi).StandardOutput;

            String FResults = x.ReadToEnd();
            String Result = "";
            try
            {
                String SResults = Strings.Split(FResults, @"'")[1];
                Result = Strings.Split(SResults, @"'")[0];
                SD.Add(Result);
                return SD.ToArray();
            }
            catch
            {
                Result = "File is clean.";
                SD.Add(Result);
                return SD.ToArray();
            }
        }


        


        }


    }

