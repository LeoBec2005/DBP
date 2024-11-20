using Xamarin.Forms;

namespace CurriculumVitaeApp
{
    public partial class CvPage : ContentPage
    {
        public CvPage(string name, string profession, string description, string experience, string education)
        {
            InitializeComponent();

            // Asignar los datos a los elementos visuales
            NameLabel.Text = name;
            ProfessionLabel.Text = profession;
            DescriptionLabel.Text = description;
            ExperienceLabel.Text = experience;
            EducationLabel.Text = education;
        }
    }
}
